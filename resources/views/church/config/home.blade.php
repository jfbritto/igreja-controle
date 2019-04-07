@extends('adminlte::page')

@section('title', 'Igreja Controle - Configurações')

@section('content_header')
    <h1><i class="fa fa-cog" aria-hidden="true"></i> Configurações</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('config')}}">Configurações</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>


<form role="form" method="POST" action="{{ route('config.update') }}" enctype="multipart/form-data">
@csrf

<div class="row">
    <div class="col-md-3">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary" style="padding: 10px">
                    <i onclick="openModalPhoto()" style="position: absolute; left: 50%; top: 50%; transform: translate(-35%, -40%); color: white; cursor: pointer" class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                    <img title="Editar imagem" onclick="openModalPhoto()" style="display: block; margin-right: auto; margin-left: auto; cursor: pointer;" src="@if(!is_null($church->avatar)){{ url('storage/churches/'.$church->avatar) }} @else {{ url('storage/churches/default.jpg') }} @endif" class='img img-circle' width='202'>
                </div>
            </div>
        </div>
                    
    </div>
    <div class="col-md-9">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
         
                    <div class="box-body">

                        <div class='row'>
                            <div class='col-md-6'>

                                <div class="form-group">
                                    <label for='name'>Igreja</label> 

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <input id='name' name='name' type="text" class="form-control" value="{{$church->name}}" disabled>
                                    </div>
                                </div>

                            </div>
                            <div class='col-md-6'>
                        
                                <div class="form-group">
                                    <label for='email'>E-mail</label> 

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <input id='email' name='email' type="text" class="form-control" value="{{$church->email}}" disabled>
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                        <div class='row'>
                            
                            <div class='col-md-6'>
                            
                                <div class="form-group">
                                    <label for='cnpj'>CNPJ</label> 

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-address-card-o"></i>
                                        </div>
                                        <input id='cnpj' name='cnpj' type="text" class="form-control" value="{{$church->cnpj}}" disabled>
                                    </div>
                                </div>

                            </div>
                            
                            <div class='col-md-6'>

                                <div class="form-group">
                                    <label for='phone'>Telefone</label> 

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input id='phone' name='phone' type="text" class="form-control" value="{{$church->phone}}" disabled >
                                    </div>
                                </div>

                            </div>

                        </div>

                      </div>
                      <div class="box-footer text-right">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Salvar</button>
                      </div>
                </div>

            </div>    

        </div>

    </div>
</div>     

<!-- editar caixa -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close fechar-modal" data-dismiss="modal">&times;</button>
              Selecione a imagem
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
<!--                             <label for='avatar'>Imagem</label>  -->
                            @laracropCss(true)
                            @laracrop(name=avatar | aspectratio=1/1 | minsize=[100, 100] | maxsize=[400, 400] | bgcolor=black | bgopacity=0.7)
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>                    
        </div>
    </div>    
</div> 

</form>

@endsection
@section('js')

    <script>
        
        function openModalPhoto(){
            $("#myModal").modal('show');
        }

    </script>    

@stop



