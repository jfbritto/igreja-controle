@extends('adminlte::page')

@section('title', 'Igreja Controle - Igrejas')

@section('content_header')
    <h1><i class="fa fa-home" aria-hidden="true"></i> Igrejas</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('admindash')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('church')}}"><i class="fa fa-home"></i> Igrejas</a></li>
        <li><a href="{{route('church.show', $church->id)}}"><i class="fa fa-home"></i> {{$church->name}}</a></li>
        <li><a href="#">Editar</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>

<form role="form" method="POST" action="{{ route('church.update', $church->id) }}" enctype="multipart/form-data">
@csrf


<div class="row">
    <div class="col-md-3">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary" style="padding: 10px">
                    <i title="Editar imagem" onclick="openModalPhoto()" style="position: absolute; left: 50%; top: 50%; transform: translate(-35%, -40%); color: white; cursor: pointer" class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                    <img title="Editar imagem" onclick="openModalPhoto()" style="display: block; margin-right: auto; margin-left: auto; cursor: pointer;" src="@if(!is_null($church->avatar)){{ url('storage/churches/'.$church->avatar) }} @else {{ url('storage/churches/default.jpg') }} @endif" class='img img-circle' width='149'>
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
                                            <label for='name'>Nome</label> 

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-home"></i>
                                                </div>
                                                <input id='name' name='name' type="text" class="form-control" required value="{{ $church->name }}" autofocus>
                                            </div>
                                        </div>

                                    </div>
                                    <div class='col-md-4'>
                                
                                        <div class="form-group">
                                            <label for='email'>E-mail</label> 

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </div>
                                                <input id='email' name='email' type="email" class="form-control" value="{{ $church->email }}" required>
                                            </div>
                                        </div>

                                    </div>


                                    <div class='col-md-4'>

                                        <div class="form-group">
                                            <label for='cnpj'>CNPJ</label> 

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-address-card-o"></i>
                                                </div>
                                                <input id='cnpj' name='cnpj' type="text" class="form-control" value="{{ $church->cnpj }}" required>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class='row'>
                                    
                                    <div class='col-md-4'>
                                    
                                        <div class="form-group">
                                            <label for='phone'>Telefone</label> 

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <input id='phone' name='phone' type="text" class="form-control" value="{{ $church->phone }}" required >
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
                                                <input id='lat' name='lat' type="text" class="form-control" value="{{ $church->lat }}" required>
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
                                                <input id='long' name='long' type="text" class="form-control" value="{{ $church->long }}" required>
                                            </div>
                                        </div>

                                    </div>
                                    
                                </div>

                            </div>

                        </div>

                    </div>
                      
                </div>

            </div>    

        </div>

    </div>
</div> 


<div class="box box-primary">
    <div class="box-body">
        <div class="row">
            <div class='col-md-6'>

                <div class="form-group">
                    <label for='lat'>Latitude</label> 

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <input id='lat' name='lat' type="text" class="form-control" value="{{ $church->lat }}">
                    </div>
                </div>

            </div>
            <div class='col-md-6'>

                <div class="form-group">
                    <label for='long'>Longitude</label> 

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <input id='long' name='long' type="text" class="form-control" value="{{ $church->long }}">
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
  


<div class="row">

    <div class="col-md-12">

        <div class="box box-primary">
            <!-- form start -->

              <div class="box-body">

                <div class='row'>
                    <div class='col-md-4'>

                        <div class="form-group">
                            <label for="cep">CEP</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <input type='text' name="cep" id="cep" value="{{ $church->address->cep }}" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class='col-md-4'>

                        <div class="form-group">
                            <label for="idState_fk">Estado</label> 

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <select name="idState_fk" id="idState_fk" onchange="changeState(this)" class="form-control" required>
                                    <option>Selecione o estado</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->id}}" @if($state->id == $church->address->idState_fk) selected='selected' @endif>{{$state->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class='col-md-4'>

                        <div class="form-group">
                            <label for="idCity_fk">Cidade</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <select name="idCity_fk" id="idCity_fk" class="form-control" required>
                                    @foreach($church->address->state->cities as $city)
                                        <option value="{{$city->id}}" @if($city->id == $church->address->idCity_fk) selected='selected' @endif>{{$city->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>

                </div>

                <div class='row'>

                    <div class='col-md-4'>

                        <div class="form-group">
                            <label for="address">Endereço</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <input type='text' name="address" id="address" value="{{ $church->address->address }}" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class='col-md-2'>

                        <div class="form-group">
                            <label for="number">Número</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <input type='text' name="number" id="number" value="{{ $church->address->number }}" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class='col-md-3'>

                        <div class="form-group">
                            <label for="neighborhood">Bairro</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <input type='text' name="neighborhood" id="neighborhood" value="{{ $church->address->neighborhood }}" class="form-control">
                            </div>
                        </div>

                    </div>
                    
                    <div class='col-md-3'>
                    
                        <div class="form-group">
                            <label for="complement">Complemento</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <input type='text' name="complement" id="complement" value="{{ $church->address->complement }}" class="form-control">
                            </div>
                        </div>
                    
                    </div>
                </div>



              </div>
              <!-- /.box-body -->

              <div class="box-footer text-right">
                <a href="{{ url()->previous() }}" class='btn btn-default'><i class="fa fa-close" aria-hidden="true"></i>&nbsp; Cancelar</a>
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Salvar</button>
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

        $('#phone').mask(SPMaskBehavior, spOptions);

        $('#cpf').mask('000.000.000-00', {reverse: true});

        $('#cep').mask('00000-000');


        function changeState(obj)
        {
            state = $(obj).val();

            $.ajax({
                url:'/search/city/'+state,
                type:'GET',
                dataType:'json',
                success:function(json){

                    console.log(json);

                    html = '';

                    html += '<option value="">Selecione a cidade</option>';
                    
                    for (var i in json) {
                        html += '<option value="'+json[i].id+'">'+json[i].value+'</option>';
                    }

                    $("#idCity_fk").html(html)
                }
            });
        }

        function openModalPhoto(){
            $("#myModal").modal('show');
        }
        
    </script>    
@stop