@extends('adminlte::page')

@section('title', 'Igreja Controle - Células')

@section('content_header')
    <h1><i class="fa fa-puzzle-piece" aria-hidden="true"></i> Células</h1>

    <ol class="breadcrumb">
    <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('cell')}}"><i class="fa fa-puzzle-piece"></i> Células</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>

<div class="box box-primary">

    <div class="box-header with-border form-inline text-right">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{ route('cell.create') }}" class='btn btn-success' title="Nova célula"><i class="fa fa-plus" aria-hidden="true"></i></a>
        </div>
    </div>
    
    <div class="box-body">
        <table class='table table-hover table-striped table-condensed' id='table'>
            <thead>
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th class="hidden-xs hidden-sm">Responsável</th>
                    <th class="hidden-xs hidden-sm">Telefone</th>
                    <th>Mapa</th>
                    <th class="hidden-xs hidden-sm">Situação</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @forelse($cells as $cell)
                <tr class="{{ (!$cell->isActive ? 'danger' : '') }} ">
                	<td style='vertical-align:middle'><img src="@if(!is_null($cell->avatar)){{ url('storage/cells/'.$cell->avatar) }} @else {{ url('storage/cells/default.jpg') }} @endif" class='img img-circle' width='40'></td>
                    <td style='vertical-align:middle'>{{ $cell->title }}</td>
                    <td class='hidden-xs hidden-sm' style='vertical-align:middle'>{{ $cell->nameResponsable }}</td>
                    <td class='hidden-xs hidden-sm' style='vertical-align:middle'>{{ $cell->phoneResponsable }}</td>
                    <td style='vertical-align:middle'><a title="Abrir mapa" target="_blank" href="https://www.google.com/maps?q=loc:{{ $cell->lat }},{{ $cell->long }}"><i class="fa fa-map-marker fa-2x"></i></a></td>
                    <td style='vertical-align:middle' class='hidden-xs hidden-sm'>
                        @if($cell->isActive) Ativa @else Inativa @endif
                    </td>
                    <td style='vertical-align:middle; width: 150px' class='text-right'>
                        <div class="btn-group" role="group" aria-label="Basic example">
	                        <a data-cell='{{$cell->id}}' class='btn btn-danger deletCell' title="Deletar célula"><i class="fa fa-trash" aria-hidden="true"></i></a>
	                        <a href="{{ url('church/cell/edit', $cell->id) }}" class='btn btn-warning' title="Editar célula"><i class="fa fa-pencil" aria-hidden="true"></i></a>
	                        <a href="{{ url('church/cell/show', $cell->id) }}" class='btn btn-primary' title="Visualizar célula"><i class="fa fa-eye" aria-hidden="true"></i></a>

                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td style='vertical-align:middle' colspan="200">Nenhuma célula cadastrada!</td>
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


			$(".deletCell").on('click', function(){

			    var cell = $(this).attr('data-cell');

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
			            window.location = '/church/cell/destroy/'+cell;
			      }
			    })
			});
            
        });
    </script>
@stop