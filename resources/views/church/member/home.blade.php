@extends('adminlte::page')

@section('title', 'Igreja Controle - Membros')

@section('content_header')
    <h1><i class="fa fa-users" aria-hidden="true"></i> Membros</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('member')}}">Membros</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>

<div class="row">

    <div class="col-md-12">

        <div class="box box-primary">
            <div class="box-header with-border">
                <a href="{{ route('member.create') }}" class='btn btn-success'><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Novo membro</a>
                <a target="_blank" href="{{ route('member.pdf') }}" class='btn btn-danger'><i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp; Gerar PDF com todos os membros</a>
            </div>
            
            <div class="box-body">
                <table class='table table-hover table-striped table-condensed' id='table'>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th class='hidden-xs'>Email</th>
                            <th class='hidden-xs'>Nascimento</th>
                            <th class='hidden-xs'>Telefone</th>
                            <th class='hidden-xs'>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($members as $member)
                        <tr class='@if(!$member->isActive) danger @endif'>
                            <td style='vertical-align:middle'>{{ $member->name }}</td>
                            <td style='vertical-align:middle' class='hidden-xs'>{{ $member->email }}</td>
                            <td style='vertical-align:middle' class='hidden-xs'>{{ date('d/m/Y', strtotime($member->birth)) }}</td>
                            <td style='vertical-align:middle' class='hidden-xs'>{{ $member->phone }}</td>
                            <td style='vertical-align:middle' class='hidden-xs'>
                                @if($member->isActive) Ativo @else Inativo @endif
                            </td>
                            <td style='vertical-align:middle' class='text-right'>
                                @if($member->isActive) 
                                    <a href="{{ url('church/member/inactivate', $member->id) }}" class='btn btn-danger'><i class="fa fa-power-off" aria-hidden="true"></i>&nbsp; Inativar</a>
                                @else 
                                    <a href="{{ url('church/member/activate', $member->id) }}" class='btn btn-success'><i class="fa fa-power-off" aria-hidden="true"></i>&nbsp; Ativar</a>
                                @endif
                                <a href="{{ url('church/member/destroy', $member->id) }}" class='btn btn-danger'><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Deletar</a>
                                <a href="{{ url('church/member/edit', $member->id) }}" class='btn btn-warning'><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp; Editar</a>
                                <a href="{{ url('church/member/show', $member->id) }}" class='btn btn-primary'><i class="fa fa-eye" aria-hidden="true"></i>&nbsp; Visualizar</a>
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
        });
    </script>
@stop