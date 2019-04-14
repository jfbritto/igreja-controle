@extends('adminlte::page')

@section('title', 'Igreja Controle - Documentos')

@section('content_header')
    <h1><i class="fa fa-file" aria-hidden="true"></i> Documentos</h1>

    <ol class="breadcrumb">
    <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('cell')}}"><i class="fa fa-file"></i> Documentos</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>

<div class="box box-primary">

    <div class="box-header with-border form-inline text-right">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{ route('doc.create') }}" class='btn btn-success' title="Nova pasta"><i class="fa fa-plus" aria-hidden="true"></i></a>
        </div>
    </div>
    
    <div class="box-body">
        <table class='table table-hover table-striped table-condensed' id='table'>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th class="hidden-xs hidden-sm">Descrição</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @forelse($folders as $folder)
                <tr>
                    <td style='vertical-align:middle'>{{ $folder->name }}</td>
                    <td class='hidden-xs hidden-sm' style='vertical-align:middle'>{{ $folder->description }}</td>
                    <td style='vertical-align:middle; width: 150px' class='text-right'>
                        <div class="btn-group" role="group" aria-label="Basic example">

	                        <a data-folder='{{$folder->id}}' class='btn btn-danger deletFolder' title="Deletar pasta"><i class="fa fa-trash" aria-hidden="true"></i></a>
	                        <a href="{{ route('doc.edit', $folder->id) }}" class='btn btn-warning' title="Editar pasta"><i class="fa fa-pencil" aria-hidden="true"></i></a>
	                        <a href="{{ url('church/folder/show', $folder->id) }}" class='btn btn-primary' title="Abrir pasta"><i class="fa fa-folder-open" aria-hidden="true"></i></a>

                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td style='vertical-align:middle' colspan="200">Nenhuma pasta cadastrada!</td>
                </tr>
            @endforelse
            </tbody>
        </table>
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


			$(".deletFolder").on('click', function(){

			    var folder = $(this).attr('data-folder');

			    Swal.fire({
			      title: 'Tem certeza?',
			      text: "",
			      type: 'warning',
			      showCancelButton: true,
			      confirmButtonColor: '#3085d6',
			      cancelButtonColor: '#d33',
			      confirmButtonText: 'Sim, deletar!',
			      cancelButtonText: 'não',
			    }).then((result) => {
			      if (result.value) {
			            window.location = '/church/folder/destroy/'+folder;
			      }
			    })
			});
            
        });
    </script>
@stop