@extends('adminlte::page')

@section('title', 'Igreja Controle - Inscrições')

@section('content_header')
    <h1><i class="fa fa-check-square-o" aria-hidden="true"></i> Inscrições</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('inscription')}}">Inscrições</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>

            
<div class="row">

    <div class="col-md-12">

        <div class="box box-primary">
           
            <div class="box-body">
                <table class='table table-hover table-striped' id='table'>
                    <thead>
                        <tr>
                            <th>Evento</th>
                            <th>Periodo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($events as $event)
                        <tr>
                            <td>{{ $event->title }}</td>
                            <td>{{ date('d/m/Y', strtotime($event->startDate)) }} à {{ date('d/m/Y', strtotime($event->endDate)) }}</td>
                            <td class='text-right'>
                                <a href="" class='btn btn-danger'>Deletar</a>
                                <a href="" class='btn btn-danger'>Desativar</a>
                                <a href="{{ url('church/inscription/show', $event->id) }}" class='btn btn-primary'>Visualizar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="200">Nenhum evento com inscrição cadastrado!</td>
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