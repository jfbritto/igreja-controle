@extends('adminlte::page')

@section('title', 'Igreja Controle - Finanças')

@section('content_header')
    <h1><i class="fa fa-money" aria-hidden="true"></i> Finanças</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('finance')}}"><i class="fa fa-money"></i> Finanças</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>

<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
        <div class="inner">
            <h3>{{number_format($total_box, 2, ',', '.')}}</h3>

            <p>Caixa total</p>
        </div>
        <div class="icon">
            <i class="fa fa-usd"></i>
        </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
        <div class="inner">
            <h3>{{number_format($total_month_entries, 2, ',', '.')}}</h3>

            <p>Entradas</p>
        </div>
        <div class="icon">
            <i class="fa fa-usd"></i>
        </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
        <div class="inner">
            <h3>{{number_format($total_month_outputs, 2, ',', '.')}}</h3>

            <p>Saídas</p>
        </div>
        <div class="icon">
            <i class="fa fa-usd"></i>
        </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
        <div class="inner">
            <h3>{{number_format($total_month_box, 2, ',', '.')}}</h3>

            <p>Balanço mensal</p>
        </div>
        <div class="icon">
            <i class="fa fa-usd"></i>
        </div>
        </div>
    </div>
<!-- ./col -->
</div>

<div class="row">

    <div class="col-md-12">

        <h3><i class="fa fa-list-alt" aria-hidden="true"></i> Relatório Mensal</h3>
        <div class="box box-primary">
            <div class="box-header with-border">
                <form method="POST" action="{{route('finance.month')}}">
                @csrf
                    <div class='row'>
                        <div class='col-md-2'>
                            <div class="form-group">
                                <select class="form-control" name="year" onchange="submit(this)">
                                    @foreach($years as $year_movimentation)
                                        <option @if($year_movimentation->year == $year) selected="selected" @endif value="{{$year_movimentation->year}}">{{$year_movimentation->year}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class='col-md-2'>    
                            <div class="form-group">
                                <select class="form-control" name="month" onchange="submit(this)">
                                    <option @if($month == '01') selected="selected" @endif value="01">Janeiro</option>
                                    <option @if($month == '02') selected="selected" @endif value="02">Fevereiro</option>
                                    <option @if($month == '03') selected="selected" @endif value="03">Março</option>
                                    <option @if($month == '04') selected="selected" @endif value="04">Abril</option>
                                    <option @if($month == '05') selected="selected" @endif value="05">Maio</option>
                                    <option @if($month == '06') selected="selected" @endif value="06">Junho</option>
                                    <option @if($month == '07') selected="selected" @endif value="07">Julho</option>
                                    <option @if($month == '08') selected="selected" @endif value="08">Agosto</option>
                                    <option @if($month == '09') selected="selected" @endif value="09">Setembro</option>
                                    <option @if($month == '10') selected="selected" @endif value="10">Outubro</option>
                                    <option @if($month == '11') selected="selected" @endif value="11">Novembro</option>
                                    <option @if($month == '12') selected="selected" @endif value="12">Dezembro</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-md-8 text-right'>
                            <a href="{{ route('finance.create') }}" class='btn btn-success' title="Inserir nova movimentação"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            <a target="_blank" href="{{ route('finance.pdf', [$year, $month]) }}" class='btn btn-danger' title="Gerar PDF com o balanço mensal"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
                        </div>
                    </div>

                </form>
            </div>
            
            <div class="box-body">
                <table class='table table-hover table-striped table-condensed' id='table'>
                    <thead>
                        <tr>
                            <th>Operação</th>
                            <th>Tipo</th>
                            <th>Data movimentação</th>
                            <th>Valor</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($movimentations as $movimentation)
                        <tr class="@if($movimentation->type == 'I') bg-green @else bg-red @endif">
                            <td style='vertical-align:middle'>@if($movimentation->type == 'O') Saída @else Entrada @endif</td>
                            <td style='vertical-align:middle'>{{ $movimentation->action }}</td>
                            <td style='vertical-align:middle'>{{ date('d/m/Y', strtotime($movimentation->movimentationDate)) }}</td>
                            <td style='vertical-align:middle'>R$ {{ number_format($movimentation->value, 2, ',', '.') }}</td>
                            <td style='vertical-align:middle' class='text-right'>
                                <a href="{{ route('finance.show', $movimentation->id) }}" class='btn btn-primary' title="Visualizar movimentação"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td style='vertical-align:middle' colspan="200">Nenhuma movimentação registrada!</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>

            </div>

        </div>

    </div>    

</div>




@endsection


@section('js')
    <script>

         $('#value').mask('#.##0,00', {reverse: true});

        $(document).ready(function () {
            $('#table').dataTable({
            	"language": {
				    "sEmptyTable":   "Nenhum registro encontrado",
				    "sProcessing":   "A processar...",
				    "sLengthMenu":   "Mostrar _MENU_ registos",
				    "sZeroRecords":  "Não foram encontrados resultados",
				    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registos",
				    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registos",
				    "sInfoFiltered": "(filtrado de _MAX_ registos no total)",
				    "sInfoPostFix":  "",
				    "sSearch":       "Procurar:",
				    "sUrl":          "",
				    "oPaginate": {
				        "sFirst":    "Primeiro",
				        "sPrevious": "Anterior",
				        "sNext":     "Seguinte",
				        "sLast":     "Último"
				    },
				    "oAria": {
				        "sSortAscending":  ": Ordenar colunas de forma ascendente",
				        "sSortDescending": ": Ordenar colunas de forma descendente"
				    }
				  }
            });
        });
    </script>
@stop
       