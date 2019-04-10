@extends('adminlte::page')

@section('title', 'Igreja Controle - Carteirinhas')

@section('content_header')
    <h1><i class="fa fa-id-card-o" aria-hidden="true"></i> Carteirinhas</h1>

    <ol class="breadcrumb">
    <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('card')}}"><i class="fa fa-id-card-o"></i> Carteirinhas</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>

<form target="_blank" role="form" method="POST" action="{{ route('card.pdf') }}">
@csrf

<div class="row">

    <div class="col-md-12">

        <div class="box box-primary">
            <div class="box-header with-border text-right">
<!--                 <a target="_blank" href="{{ route('card.pdf') }}" class='btn btn-danger' title="Gerar carteirinhas"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a> -->
                <button class='btn btn-danger' title="Gerar carteirinhas"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
            </div>
            
            <div class="box-body">

                <div class="box-body">
                    <table class='table table-hover table-striped' id='table'>
                        <thead>
                            <tr>
                                <th>
                                    <label class="container_ckb"> Marcar todos
                                        <input type="checkbox" name="" id="check_all"> 
                                        <span class="checkmark"></span>
                                    </label>
                                </th>
                                <th></th>
                                <th>Nome</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($members as $member)
                            <tr>
                                <td style="width: 140px">
                                    <label class="container_ckb">
                                        <input class="check_bx" type="checkbox" name="id_users[]" value="{{$member->id}}">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td style='vertical-align:middle'><img src="@if(!is_null($member->avatar)){{ url('storage/members/'.$member->avatar) }} @else {{ url('storage/members/default.jpg') }} @endif" class='img img-circle' width='40'></td>
                                <td style='vertical-align:middle'>{{ $member->name }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="200">Nenhum membro faz aniversário nessa data!</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </div>    

</div>

</form>

@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('#table').dataTable({
                "paging":   false,
                "ordering": false,
                "info":     true,
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

            $("#check_all").on('change', function(){

                if(this.checked)
                    $(".check_bx").prop("checked", true)
                else
                    $(".check_bx").prop("checked", false)

            })

            $(".check_bx").on('change', function(){
                if(!this.checked)
                    $("#check_all").prop("checked", false)

                if( $('.check_bx').filter(":checked").length == $('.check_bx').length)
                    $("#check_all").prop("checked", true)
            });


             


            
        });
    </script>
@stop 