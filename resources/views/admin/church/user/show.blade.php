@extends('adminlte::page')

@section('title', 'Igreja Controle - Igrejas')

@section('content_header')
    <h1><i class="fa fa-home" aria-hidden="true"></i> {{$user->church->name}} | {{$user->name}}</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('admindash')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('church')}}"><i class="fa fa-home"></i> Igrejas</a></li>
        <li><a href="{{route('church.show', $user->church->id)}}"><i class="fa fa-home"></i> {{$user->church->name}}</a></li>
        <li><a href="#"><i class="fa fa-user"></i> {{$user->name}}</a></li>
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
                    <a href="{{ url()->previous() }}" class='btn btn-default' title="Voltar"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    <a href="{{ route('church.user.edit', $user->id) }}" class='btn btn-warning' title="Editar membro"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="{{ route('church.user.destroy', $user->id) }}" class='btn btn-danger' title="Deletar membro"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </div>
            </div>    
        </div>
    </div>
</div>        


<div class="row">
    <div class="col-md-3">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary" style="padding: 10px">
                    <img title="Editar imagem" onclick="openModalPhoto()" style="display: block; margin-right: auto; margin-left: auto; cursor: pointer;" src="@if(!is_null($user->avatar)){{ url('storage/members/'.$user->avatar) }} @else {{ url('storage/members/default.jpg') }} @endif" class='img img-circle' width='149'>
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
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <input id='name' name='name' type="text" class="form-control" required disabled value='{{$user->name}}'>
                                            </div>
                                        </div>

                                    </div>
                                    <div class='col-md-4'>
                                
                                        <div class="form-group">
                                            <label for='sex'>Sexo</label> 

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-transgender"></i>
                                                </div>
                                                <select id='sex' name='sex' class="form-control" required disabled>
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
                                                <input id='birth' name='birth' type="date" class="form-control" required disabled value='{{$user->birth}}'>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class='row'>
                                    
                                    <div class='col-md-4'>
                                    
                                        <div class="form-group">
                                            <label for='email'>E-mail</label> 

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </div>
                                                <input id='email' name='email' type="email" class="form-control" required disabled value='{{$user->email}}'>
                                            </div>
                                        </div>

                                    </div>
                                    <div class='col-md-4'>

                                        <div class="form-group">
                                            <label for='cpf'>CPF</label> 

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-address-card-o"></i>
                                                </div>
                                                <input id='cpf' name='cpf' type="text" class="form-control" required disabled value='{{$user->cpf}}'>
                                            </div>
                                        </div>

                                    </div>
                                    <div class='col-md-4'>

                                        <div class="form-group">
                                            <label for='phone'>Telefone</label> 

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <input id='phone' name='phone' type="text" class="form-control" required disabled value='{{$user->phone}}'>
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

<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
              <div class="box-body">
                <div class='row'>
                    <div class='col-md-6'>

                        <div class="form-group">
                            <label for='baptismDate'>Data batismo</label>  

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input id='baptismDate' name='baptismDate' type="date" class="form-control" value="{{ $user->baptismDate }}" disabled>
                            </div>
                        </div>

                    </div>
                    <div class='col-md-6'>

                        <div class="form-group">
                            <label for='memberSince'>Membro desde</label>  

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input id='memberSince' name='memberSince' type="date" class="form-control" value="{{ $user->memberSince }}" disabled>
                            </div>
                        </div>

                    </div>
                    <div class='col-md-12'>

                        <div class="form-group">
                            <label for="info">Informações adicionais</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-align-center"></i>
                                </div>
                                <textarea id='info' name='info' class="form-control" disabled>{{ $user->info }}</textarea>
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

                        <div class="form-group">
                            <label for="cep">CEP</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <input type='text' name="cep" id="cep" class="form-control" value='{{$user->address->cep}}' disabled>
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
                                <select name="idState_fk" id="idState_fk" onchange="changeState(this)" class="form-control" required disabled>
                                    <option>Selecione o estado</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->id}}" @if($state->id == $user->address->idState_fk) selected='selected' @endif>{{$state->nome}}</option>
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
                                <select name="idCity_fk" id="idCity_fk" class="form-control" required disabled>
                                    @foreach($user->address->state->cities as $city)
                                        <option value="{{$city->id}}" @if($city->id == $user->address->idCity_fk) selected='selected' @endif>{{$city->nome}}</option>
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
                                <input disabled type='text' name="address" id="address" class="form-control" value='{{$user->address->address}}'>
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
                                <input disabled type='text' name="number" id="number" class="form-control" value='{{$user->address->number}}'>
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
                                <input disabled type='text' name="neighborhood" id="neighborhood" class="form-control" value='{{$user->address->neighborhood}}'>
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
                                <input disabled type='text' name="complement" id="complement" class="form-control" value='{{$user->address->complement}}'>
                            </div>
                        </div>
                    
                    </div>
                </div>



              </div>
              <!-- /.box-body -->

          </div>

    </div>    

</div>

@endsection


