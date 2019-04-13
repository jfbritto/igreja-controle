@extends('adminlte::page')

@section('title', 'Igreja Controle - Células')

@section('content_header')
    <h1><i class="fa fa-puzzle-piece" aria-hidden="true"></i> Cadastrar Célula</h1>

    <ol class="breadcrumb">
    <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('cell')}}"><i class="fa fa-puzzle-piece"></i> Células</a></li>
        <li><a href="#"> Cadastrar</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>




<form role="form" method="POST" action="{{ route('cell.store') }}" enctype="multipart/form-data">
@csrf

<div class="row">
    <div class="col-md-3">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary" style="padding: 10px">
                    <i title="Editar imagem" onclick="openModalPhoto()" style="position: absolute; left: 50%; top: 50%; transform: translate(-35%, -40%); color: white; cursor: pointer" class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                    <img title="Editar imagem" onclick="openModalPhoto()" style="display: block; margin-right: auto; margin-left: auto; cursor: pointer;" src="{{ url('storage/cells/default.jpg') }}" class='img img-circle' width='149'>
                </div>
            </div>
        </div>
                    
    </div>
    <div class="col-md-9">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
         
                    <div class="box-body">        
                        
                        <div class="row">

                            <div class="col-md-12">

                                <div class='row'>
                                    <div class='col-md-4'>

                                        <div class="form-group">
                                            <label for='title'>Nome</label> 

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-tag"></i>
                                                </div>
                                                <input id='title' name='title' type="text" class="form-control" value="{{ old('title') }}" required>
                                            </div>
                                        </div>

                                    </div>
                                    <div class='col-md-4'>

                                        <div class="form-group">
                                            <label for='description'>Descrição</label> 

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-align-center"></i>
                                                </div>
                                                <input id='description' name='description' type="text" class="form-control" value="{{ old('description') }}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class='col-md-4'>

                                        <div class="form-group">
                                            <label for='nameResponsable'>Responsável</label> 

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <input id='nameResponsable' name='nameResponsable' type="text" class="form-control" value="{{ old('nameResponsable') }}" required>
                                            </div>
                                        </div>

                                    </div>
                                    <div class='col-md-4'>

                                        <div class="form-group">
                                            <label for='phoneResponsable'>Telefone</label> 

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <input id='phoneResponsable' name='phoneResponsable' type="text" class="form-control" value="{{ old('phoneResponsable') }}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class='col-md-4'>

                                        <div class="form-group">
                                            <label for='lat'>Latitude</label> 

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                                <input id='lat' name='lat' type="text" class="form-control" value="{{ old('lat') }}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class='col-md-4'>

                                        <div class="form-group">
                                            <label for='long'>Longitude</label> 

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                                <input id='long' name='long' type="text" class="form-control" value="{{ old('long') }}">
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                
                            </div>

                        </div>

                    </div>
                    <div class="box-footer text-right">
		                <a href="{{ url()->previous() }}" class='btn btn-default'><i class="fa fa-close" aria-hidden="true"></i>&nbsp; Cancelar</a>
		                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Salvar</button>
		            </div>
                      
                </div>

            </div>    

        </div>

    </div>
</div>     


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
                            @laracrop(name=avatar | aspectratio=1/1 | minsize=[100, 100] | maxsize=[400, 400] | bgcolor=black | bgopacity=0.7 | value=old('avatar'))
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

        var SPMaskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        spOptions = {
            onKeyPress: function(val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };

    	$('#phoneResponsable').mask(SPMaskBehavior, spOptions);

        function openModalPhoto(){
            $("#myModal").modal('show');
        }
        
    </script>    
@stop

