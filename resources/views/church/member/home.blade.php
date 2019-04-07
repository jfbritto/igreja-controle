@extends('adminlte::page')

@section('title', 'Igreja Controle - Membros')

@section('content_header')
    <h1><i class="fa fa-users" aria-hidden="true"></i> Membros</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('member')}}"><i class="fa fa-users"></i> Membros</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>

<div class="box box-primary">

    <div class="box-header with-border form-inline text-right">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="#" id="btn-link" class="btn btn-default" title="Copiar o link para cadastro de membro"><i class="fa fa-link" aria-hidden="true"></i></a>
            <a target="_blank" href="{{ route('member.pdf') }}" class='btn btn-danger' title="Gerar PDF com todos os membros"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
            <a href="{{ route('member.create') }}" class='btn btn-success' title="Novo membro"><i class="fa fa-plus" aria-hidden="true"></i></a>
        </div>
    </div>
    
    <div class="box-body">
        <table class='table table-hover table-striped table-condensed' id='table'>
            <thead>
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th class='hidden-xs hidden-sm'>Email</th>
                    <th class='hidden-xs hidden-sm'>Nascimento</th>
                    <th class='hidden-xs hidden-sm'>Telefone</th>
                    <th class='hidden-xs hidden-sm'>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @forelse($members as $member)
                <tr class="{{ $member->isPendent ? 'info' : (!$member->isActive ? 'danger' : '') }} ">
                    <td style='vertical-align:middle'><img src="@if(!is_null($member->avatar)){{ url('storage/members/'.$member->avatar) }} @else {{ url('storage/members/default.jpg') }} @endif" class='img img-circle' width='40'></td>
                    <td style='vertical-align:middle;'>{{ $member->name }}</td>
                    <td style='vertical-align:middle' class='hidden-xs hidden-sm'>{{ $member->email }}</td>
                    <td style='vertical-align:middle' class='hidden-xs hidden-sm'>{{ date('d/m/Y', strtotime($member->birth)) }}</td>
                    <td style='vertical-align:middle' class='hidden-xs hidden-sm'>{{ $member->phone }}</td>
                    <td style='vertical-align:middle' class='hidden-xs hidden-sm'>
                        @if($member->isActive) Ativo @else Inativo @endif
                    </td>
                    <td style='vertical-align:middle; width: 150px' class='text-right'>
                        <div class="btn-group" role="group" aria-label="Basic example">
                        @if($member->isPendent) 
                            <a href="{{ url('church/member/validate', $member->id) }}" class='btn btn-info' title="Validar membro"><i class="fa fa-power-off" aria-hidden="true"></i></a>
                        @else

                            @if($member->isActive) 
                                <a href="{{ url('church/member/inactivate', $member->id) }}" class='btn btn-danger' title="Inativar membro"><i class="fa fa-power-off" aria-hidden="true"></i></a>
                            @else 
                                <a href="{{ url('church/member/activate', $member->id) }}" class='btn btn-success' title="Ativar membro"><i class="fa fa-power-off" aria-hidden="true"></i></a>
                            @endif

                        <a href="{{ url('church/member/destroy', $member->id) }}" class='btn btn-danger' title="Deletar membro"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        <a href="{{ url('church/member/edit', $member->id) }}" class='btn btn-warning' title="Editar membro"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="{{ url('church/member/show', $member->id) }}" class='btn btn-primary' title="Visualizar membro"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        @endif
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
        <input class="form-control" id="btn-link-txt" value="{{ env('APP_URL').'/invite/'.$church->hash }}" readonly="">
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


            $('#btn-link').click(function(){
                    //Visto que o 'copy' copia o texto que estiver selecionado, talvez você queira colocar seu valor em um txt escondido
                
                $('#btn-link-txt').select();
                var ok = document.execCommand('copy');
                if (ok) { 
                    // alert('Link copiado para a área de transferência'); 

                    Swal.fire(
                      'Link copiado para a área de transferência!',
                      '',
                      'success'
                    )
                }
            });
            
        });
    </script>
@stop