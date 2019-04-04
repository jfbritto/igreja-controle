@extends('adminlte::page')

@section('title', 'Igreja Controle - Visualizar Membro')

@section('content_header')
    <h1>Visualizar Membro | {{$member->name}}</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('member')}}">Membros</a></li>
        <li><a href="#">Visualizar</a></li>
        <li><a href="#">{{$member->name}}</a></li>
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
<!--                 @if($member->isPendent) 
                    <a href="{{ url('church/member/validate', $member->id) }}" class='btn btn-info' title="Validar membro"><i class="fa fa-power-off" aria-hidden="true"></i></a>
                @else

                    @if($member->isActive) 
                        <a href="{{ url('church/member/inactivate', $member->id) }}" class='btn btn-danger' title="Inativar membro"><i class="fa fa-power-off" aria-hidden="true"></i></a>
                    @else 
                        <a href="{{ url('church/member/activate', $member->id) }}" class='btn btn-success' title="Ativar membro"><i class="fa fa-power-off" aria-hidden="true"></i></a>
                    @endif

                @endif -->
                <a href="{{ url('church/member/destroy', $member->id) }}" class='btn btn-danger' title="Deletar membro"><i class="fa fa-trash" aria-hidden="true"></i></a>
                <a href="{{ url('church/member/edit', $member->id) }}" class='btn btn-warning' title="Editar membro"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            </div>    
        </div>
    </div>
</div>        


<div class="row">
    <div class="col-md-3">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary" style="padding: 10px">
                    <img title="Editar imagem" onclick="openModalPhoto()" style="display: block; margin-right: auto; margin-left: auto; cursor: pointer;" src="@if(!is_null($member->avatar)){{ url('storage/members/'.$member->avatar) }} @else {{ url('storage/members/default.jpg') }} @endif" class='img img-circle' width='149'>
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
                                                <input id='name' name='name' type="text" class="form-control" required readonly value='{{$member->name}}'>
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
                                                <select id='sex' name='sex' class="form-control" required readonly>
                                                    <option>-- Selecione --</option>
                                                    <option value='masculino' @if($member->sex == 'masculino') selected='selected' @endif>Masculino</option>
                                                    <option value='feminino' @if($member->sex == 'feminino') selected='selected' @endif>Feminino</option>
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
                                                <input id='birth' name='birth' type="date" class="form-control" required readonly value='{{$member->birth}}'>
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
                                                <input id='email' name='email' type="email" class="form-control" required readonly value='{{$member->email}}'>
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
                                                <input id='cpf' name='cpf' type="text" class="form-control" required readonly value='{{$member->cpf}}'>
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
                                                <input id='phone' name='phone' type="text" class="form-control" required readonly value='{{$member->phone}}'>
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
                    <div class='col-md-4'>

                        <div class="form-group">
                            <label for="cep">CEP</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <input type='text' name="cep" id="cep" class="form-control" value='{{$address->cep}}' readonly>
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
                                <select name="idState_fk" id="idState_fk" onchange="changeState(this)" class="form-control" required readonly>
                                    <option>Selecione o estado</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->id}}" @if($state->id == $address->idState_fk) selected='selected' @endif>{{$state->nome}}</option>
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
                                <select name="idCity_fk" id="idCity_fk" class="form-control" required readonly>
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
 
                        <div class="form-group">
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
                        
                        <div class="form-group">
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
                        
                        <div class="form-group">
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
                    
                        <div class="form-group">
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
              <!-- /.box-body -->

          </div>

    </div>    

</div>

@endsection


