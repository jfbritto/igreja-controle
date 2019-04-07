@extends('adminlte::page')

@section('title', 'Igreja Controle - Suporte')

@section('content_header')
    <h1><i class="fa fa-life-ring" aria-hidden="true"></i> Suporte</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('support')}}">Suporte</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>


<div class="row">

    <div class="col-md-12">

        <div class="box box-primary">
            <!-- form start -->
            <form role="form" method="POST" action="{{ route('support.store') }}">
            @csrf
            <div class="box-body">

            <div class='row'>
                <div class='col-md-6'>

                    <div class="form-group">
                        <label for='subject'>Assunto</label> 

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-tag"></i>
                            </div>
                            <input id='subject' name='subject' type="text" class="form-control" required>
                        </div>
                    </div>

                </div>
                <div class='col-md-6'>

                    <div class="form-group">
                        <label for='type'>Tipo</label> 

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-circle"></i>
                            </div>
                            <select id='type' name='type' class="form-control" required>
                                <option>-- Selecione o tipo --</option>
                                @foreach($types as $type)
                                    <option value='{{$type->id}}'>{{ $type->value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
                <div class='col-md-12'>

                    <div class="form-group">
                        <label for='message'>Mensagem</label> 

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-align-center"></i>
                            </div>
                            <textarea id='message' name='message' class="form-control" required></textarea>
                        </div>
                    </div>

                </div>
            </div>        


            </div>
            <div class="box-footer text-right">
                <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp; Enviar</button>
            </div>
            </form>
          </div>

    </div>    

</div>


<div class="row">

    <div class="col-md-12">
        <h3><i class="fa fa-comments-o" aria-hidden="true"></i> Mensagens</h3>
        <div class="box box-primary">          
            <div class="box-body">
                <table class='table table-hover table-striped table-condensed' id='table'>
                    <thead>
                        <tr>
                            <th>Assunto</th>
                            <th class='hidden-xs'>Tipo</th>
                            <th class='hidden-xs'>Data envio</th>
                            <th class='hidden-xs'>Data resposta</th>
                            <th class='hidden-xs'>Situação</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($messages as $message)
                        <tr class='@if($message->isOpen) warning @else success @endif'>
                            <td style='vertical-align:middle'>{{ $message->subject }}</td>
                            <td style='vertical-align:middle' class='hidden-xs'>
                                {{$message->type_name}}
                            </td>
                            <td style='vertical-align:middle' class='hidden-xs'>{{ date('d/m/Y H:i:s', strtotime($message->created_at)) }}</td>
                            <td style='vertical-align:middle' class='hidden-xs'>
                                @if(!is_null($message->answerDate)) 
                                    {{ date('d/m/Y H:i:s', strtotime($message->answerDate)) }}
                                @endif
                            </td>
                            <td style='vertical-align:middle' class='hidden-xs'>
                                @if($message->isOpen) Aberta @else Finalizada @endif
                            </td>
                            <td style='vertical-align:middle' class='text-right'>
                                <a href="{{url('church/support/show', $message->id)}}" class='btn btn-primary' title="Visualizar mensagem"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td style='vertical-align:middle' colspan="200">Nenhuma mensagem enviada!</td>
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