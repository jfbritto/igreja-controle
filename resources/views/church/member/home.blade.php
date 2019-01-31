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
                <a href="{{ route('member.create') }}" class='btn btn-success'>Novo membro</a>
                <a target="_blank" href="{{ route('member.pdf') }}" class='btn btn-success'>Gerar PDF com todos os membros</a>
            </div>
            
            <div class="box-body">
                <table class='table table-hover table-striped' id='table'>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th class='hidden-xs'>Email</th>
                            <th class='hidden-xs'>Nascimento</th>
                            <th class='hidden-xs'>Telefone</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($members as $member)
                        <tr>
                            <td>{{ $member->name }}</td>
                            <td class='hidden-xs'>{{ $member->email }}</td>
                            <td class='hidden-xs'>{{ date('d/m/Y', strtotime($member->birth)) }}</td>
                            <td class='hidden-xs'>{{ $member->phone }}</td>
                            <td class='text-right'>
                                <a href="{{ url('church/member/destroy', $member->id) }}" class='btn btn-danger'>Deletar</a>
                                <a href="{{ url('church/member/edit', $member->id) }}" class='btn btn-warning'>Editar</a>
                                <a href="{{ url('church/member/show', $member->id) }}" class='btn btn-primary'>Visualizar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="200">Nenhum membro cadastrado!</td>
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