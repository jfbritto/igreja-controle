@extends('adminlte::page')

@section('title', 'Igreja Controle - Inscrições')

@section('content_header')
    <h1><i class="fa fa-life-ring" aria-hidden="true"></i> Suporte</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('inscription')}}"><i class="fa fa-life-ring" aria-hidden="true"></i> Support</a></li>
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
                        <th>Igreja</th>
                        <th>Usuário</th>
                        <th>Assunto</th>
                        <th>Mensagem</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($messages_open as $message)
                    <tr>
                        <td style='vertical-align:middle'>{{ $message->church->name }}</td>
                        <td style='vertical-align:middle'>{{ $message->user->name }}</td>
                        <td style='vertical-align:middle'>{{ $message->subject }}</td>
                        <td style='vertical-align:middle'>{{ $message->message }}</td>
                    </tr>
                @empty
                    <tr>
                        <td style='vertical-align:middle' colspan="200">Nenhuma mensagem aberta!</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">
            <table class='table table-hover table-striped table-condensed' id='table'>
                <thead>
                    <tr>
                        <th>Igreja</th>
                        <th>Usuário</th>
                        <th>Assunto</th>
                        <th>Mensagem</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($messages_close as $message)
                    <tr>
                        <td style='vertical-align:middle'>{{ $message->church->name }}</td>
                        <td style='vertical-align:middle'>{{ $message->user->name }}</td>
                        <td style='vertical-align:middle'>{{ $message->subject }}</td>
                        <td style='vertical-align:middle'>{{ $message->message }}</td>
                    </tr>
                @empty
                    <tr>
                        <td style='vertical-align:middle' colspan="200">Nenhuma mensagem fechada!</td>
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