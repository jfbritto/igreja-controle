@extends('adminlte::page')

@section('title', 'Igreja Controle - Igrejas')

@section('content_header')
    <h1><i class="fa fa-home" aria-hidden="true"></i> {{$user->church->name}} - {{$user->name}}</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('church')}}">Igrejas</a></li>
        <li><a href="{{route('church.show', $user->church->id)}}">{{$user->church->name}}</a></li>
        <li><a href="#">{{$user->name}}</a></li>
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
                @if($user->isPendent) 
                    <a href="{{ url('admin/church/user/validate', $user->id) }}" class='btn btn-info'><i class="fa fa-power-off" aria-hidden="true"></i>&nbsp; Validar</a>
                @else

                    @if($user->isActive) 
                        <a href="{{ url('admin/church/user/inactivate', $user->id) }}" class='btn btn-danger'><i class="fa fa-power-off" aria-hidden="true"></i>&nbsp; Inativar</a>
                    @else 
                        <a href="{{ url('admin/church/user/activate', $user->id) }}" class='btn btn-success'><i class="fa fa-power-off" aria-hidden="true"></i>&nbsp; Ativar</a>
                    @endif

                @endif
                <a href="{{ url('admin/church/user/destroy', $user->id) }}" class='btn btn-danger'><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Deletar</a>
                <a href="{{ url('admin/church/user/edit', $user->id) }}" class='btn btn-warning'><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp; Editar</a>
            </div>    
            <div class="box-body">


                <div class="row">

                    <div class="col-md-2">

                        <div class="row">

                            <div class="col-md-12 text-center">


                                <div class='row'>

                                    <img src="@if(!is_null($user->avatar)){{ url('storage/members/'.$user->avatar) }} @else {{ url('storage/members/default.jpg') }} @endif" class='img img-circle' width='80'>
                                 
                                </div>


                            </div>    

                        </div>

                    </div>

                    <div class="col-md-10">

                        <div class='row'>
                            <div class='col-md-4'>

                                <div class="form-group responsavel">
                                    <label for='name'>Nome</label> 

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <input readonly id='name' name='name' type="text" class="form-control" required value='{{$user->name}}'>
                                    </div>
                                </div>

                            </div>
                            <div class='col-md-4'>
                        
                                <div class="form-group responsavel">
                                    <label for='sex'>Sexo</label> 

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-transgender"></i>
                                        </div>
                                        <select readonly id='sex' name='sex' class="form-control" required>
                                            <option>-- Selecione --</option>
                                            <option value='masculino' @if($user->sex == 'masculino') selected='selected' @endif>Masculino</option>
                                            <option value='feminino' @if($user->sex == 'feminino') selected='selected' @endif>Feminino</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class='col-md-4'>

                                <div class="form-group">
                                    <label for='birth'>Nascimento</label>  

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input readonly id='birth' name='birth' type="date" class="form-control" required value='{{$user->birth}}'>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-4'>
                        
                                <div class="form-group responsavel">
                                    <label for='email'>E-mail</label> 

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <input readonly id='email' name='email' type="email" class="form-control" required value='{{$user->email}}'>
                                    </div>
                                </div>

                            </div>
                            <div class='col-md-4'>

                                <div class="form-group responsavel">
                                    <label for='cpf'>CPF</label> 

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-address-card-o"></i>
                                        </div>
                                        <input readonly id='cpf' name='cpf' type="text" class="form-control" required value='{{$user->cpf}}'>
                                    </div>
                                </div>

                            </div>
                            <div class='col-md-4'>

                                <div class="form-group responsavel">
                                    <label for='phone'>Telefone</label> 

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input readonly id='phone' name='phone' type="text" class="form-control" required value='{{$user->phone}}'>
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




<div class="row">

    <div class="col-md-12">

        <div class="box box-primary">

              <div class="box-body">

                <div class='row'>
                    <div class='col-md-4'>

                        <div class="form-group responsavel">
                            <label for="cep">CEP</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <input readonly type='text' name="cep" id="cep" class="form-control" value='{{$address->cep}}'>
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
                                <select readonly name="idState_fk" id="idState_fk" onchange="changeState(this)" class="form-control" required>
                                    <option>Selecione o estado</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->id}}" @if($state->id == $address->idState_fk) selected='selected' @endif>{{$state->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class='col-md-4'>
                
                        <div class="form-group responsavel">
                            <label for="idCity_fk">Cidade</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <select readonly name="idCity_fk" id="idCity_fk" class="form-control" required>
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}" @if($city->id == $address->idCity_fk) selected='selected' @endif>{{$city->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-4'>
 
                        <div class="form-group responsavel">
                            <label for="address">Endereço</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <input readonly type='text' name="address" id="address" class="form-control" value='{{$address->address}}'>
                            </div>
                        </div>

                    </div>
                    <div class='col-md-2'>
                        
                        <div class="form-group responsavel">
                            <label for="number">Número</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <input readonly type='text' name="number" id="number" class="form-control" value='{{$address->number}}'>
                            </div>
                        </div>

                    </div>
                    <div class='col-md-3'>
                        
                        <div class="form-group responsavel">
                            <label for="neighborhood">Bairro</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <input readonly type='text' name="neighborhood" id="neighborhood" class="form-control" value='{{$address->neighborhood}}'>
                            </div>
                        </div>

                    </div>
                    <div class='col-md-3'>
                        <div class="form-group responsavel">
                            <label for="complement">Complemento</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <input readonly type='text' name="complement" id="complement" class="form-control" value='{{$address->complement}}'>
                            </div>
                        </div>
                    </div>    
                </div>

              </div>
          </div>
    </div>    

</div>

@endsection


