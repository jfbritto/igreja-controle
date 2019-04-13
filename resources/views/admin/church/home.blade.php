@extends('adminlte::page')

@section('title', 'Igreja Controle - Igrejas')

@section('content_header')
    <h1><i class="fa fa-home" aria-hidden="true"></i> Igrejas</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('admindash')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('church')}}"><i class="fa fa-home"></i> Igrejas</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>

<div class="row">

    <div class="col-md-12">

        <div class="box box-primary">
            <div class="box-header with-border text-right">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a target="_blank" href="{{ route('church.pdf') }}" class='btn btn-danger' title="Gerar PDF com todos as igrejas"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
                    <a href="{{ route('church.create') }}" class='btn btn-success' title="Nova igreja"><i class="fa fa-plus" aria-hidden="true"></i></a>
                </div>
            </div>
            
            <div class="box-body">
                <table class='table table-hover table-striped table-condensed' id='table'>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nome</th>
                            <th class='hidden-xs'>Email</th>
                            <th class='hidden-xs'>Cnpj</th>
                            <th class='hidden-xs'>Telefone</th>
                            <th class='hidden-xs'>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($churches as $church)
                        <tr class="{{ $church->isPendent ? 'info' : (!$church->isActive ? 'danger' : '') }} ">
                            <td style='vertical-align:middle'><img src="@if(!is_null($church->avatar)){{ url('storage/churches/'.$church->avatar) }} @else {{ url('storage/churches/default.jpg') }} @endif" class='img img-circle' width='40'></td>
                            <td style='vertical-align:middle'>{{ $church->name }}</td>
                            <td style='vertical-align:middle' class='hidden-xs'>{{ $church->email }}</td>
                            <td style='vertical-align:middle' class='hidden-xs'>{{ $church->cnpj }}</td>
                            <td style='vertical-align:middle' class='hidden-xs'>{{ $church->phone }}</td>
                            <td style='vertical-align:middle' class='hidden-xs'>
                                @if($church->isActive) Ativo @else Inativo @endif
                            </td>
                            <td style='vertical-align:middle; width: 160px' class='text-right'>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    @if($church->isActive) 
                                        <a data-church='{{$church->id}}' class='btn btn-danger inactiveChurch' title="Inativar igreja"><i class="fa fa-power-off" aria-hidden="true"></i></a>
                                    @else 
                                        <a href="{{ url('admin/church/activate', $church->id) }}" class='btn btn-success' title="Ativar igreja"><i class="fa fa-power-off" aria-hidden="true"></i></a>
                                    @endif

                                    <a data-church='{{$church->id}}' class='btn btn-danger deletChurch' title="Deletar igreja"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    <a href="{{ url('admin/church/edit', $church->id) }}" class='btn btn-warning' title="Editar igreja"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="{{ url('admin/church/show', $church->id) }}" class='btn btn-primary' title="Visualizar igreja"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td style='vertical-align:middle' colspan="200">Nenhum membro cadastrado!</td>
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

            $(".deletChurch").on('click', function(){

                var church = $(this).attr('data-church');

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
                        window.location = '/admin/church/destroy/'+church;
                  }
                })
            })

            $(".inactiveChurch").on('click', function(){

                var church = $(this).attr('data-church');

                Swal.fire({
                  title: 'Tem certeza?',
                  text: "",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Sim, inativar!',
                  cancelButtonText: 'não',
                }).then((result) => {
                  if (result.value) {
                        window.location = '/admin/church/inactivate/'+church;
                  }
                })
            })
        });
    </script>
@stop