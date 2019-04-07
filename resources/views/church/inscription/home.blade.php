@extends('adminlte::page')

@section('title', 'Igreja Controle - Inscrições')

@section('content_header')
    <h1><i class="fa fa-check-square-o" aria-hidden="true"></i> Inscrições</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('inscription')}}"><i class="fa fa-check-square-o"></i> Inscrições</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>


<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Abertas</a></li>
        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Encerradas</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
            <table class='table table-hover table-striped table-condensed' id='table'>
                <thead>
                    <tr>
                        <th>Evento</th>
                        <th>Local</th>
                        <th>Periodo</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @forelse($future_events as $event)
                    <tr>
                        <td style='vertical-align:middle'>{{ $event->title }}</td>
                        <td style='vertical-align:middle'>{{ $event->location }}</td>
                        <td style='vertical-align:middle'>{{ date('d/m/Y', strtotime($event->startDate)) }} à {{ date('d/m/Y', strtotime($event->endDate)) }}</td>
                        <td style='vertical-align:middle' class='text-right'>
                            <a href="{{ url('church/event/show', $event->id) }}" class='btn btn-primary' title="Visualizar evento"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td style='vertical-align:middle' colspan="200">Nenhum evento com inscrição aberta!</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">
            <table class='table table-hover table-striped table-condensed' id='table2'>
                <thead>
                    <tr>
                        <th>Evento</th>
                        <th>Local</th>
                        <th>Periodo</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @forelse($past_events as $event)
                    <tr>
                        <td style='vertical-align:middle'>{{ $event->title }}</td>
                        <td style='vertical-align:middle'>{{ $event->location }}</td>
                        <td style='vertical-align:middle'>{{ date('d/m/Y', strtotime($event->startDate)) }} à {{ date('d/m/Y', strtotime($event->endDate)) }}</td>
                        <td style='vertical-align:middle' class='text-right'>
                            <a href="{{ url('church/event/show', $event->id) }}" class='btn btn-primary' title="Visualizar evento"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td style='vertical-align:middle' colspan="200">Nenhum evento com inscrição encerrada!</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.tab-pane -->
    </div>
<!-- /.tab-content -->
</div>





@endsection
 
@section('js')
    <script>
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
            $('#table2').dataTable({
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