@extends('adminlte::page')

@section('title', 'Igreja Controle - Visualizar Membro')

@section('content_header')
    <h1><i class="fa fa-user"></i> {{$member->name}}</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('member')}}"><i class="fa fa-users"></i> Membros</a></li>
        <li><a href="#"><i class="fa fa-user"></i> {{$member->name}}</a></li>
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
                    <a data-member="{{$member->id}}" href="#" class='btn btn-primary resetPassword' title="Resetar senha"><i class="fa fa-unlock-alt" aria-hidden="true"></i></a>
                    <a href="{{ url('church/member/edit', $member->id) }}" class='btn btn-warning' title="Editar membro"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a data-member="{{$member->id}}" class='btn btn-danger deletMember' title="Deletar membro"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
                                                <input id='name' name='name' type="text" class="form-control" required disabled value='{{$member->name}}'>
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
                                                <input id='birth' name='birth' type="date" class="form-control" required disabled value='{{$member->birth}}'>
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
                                                <input id='email' name='email' type="email" class="form-control" required disabled value='{{$member->email}}'>
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
                                                <input id='cpf' name='cpf' type="text" class="form-control" required disabled value='{{$member->cpf}}'>
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
                                                <input id='phone' name='phone' type="text" class="form-control" required disabled value='{{$member->phone}}'>
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
                                <input id='baptismDate' name='baptismDate' type="date" class="form-control" value="{{ $member->baptismDate }}" disabled>
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
                                <input id='memberSince' name='memberSince' type="date" class="form-control" value="{{ $member->memberSince }}" disabled>
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
                                <textarea id='info' name='info' class="form-control" disabled>{{ $member->info }}</textarea>
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
                                <input type='text' name="cep" id="cep" class="form-control" value='{{$member->address->cep}}' disabled>
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
                                        <option value="{{$state->id}}" @if($state->id == $member->address->idState_fk) selected='selected' @endif>{{$state->nome}}</option>
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
                                    @foreach($member->address->state->cities as $city)
                                        <option value="{{$city->id}}" @if($city->id == $member->address->idCity_fk) selected='selected' @endif>{{$city->nome}}</option>
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
                                <input disabled type='text' name="address" id="address" class="form-control" value='{{$member->address->address}}'>
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
                                <input disabled type='text' name="number" id="number" class="form-control" value='{{$member->address->number}}'>
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
                                <input disabled type='text' name="neighborhood" id="neighborhood" class="form-control" value='{{$member->address->neighborhood}}'>
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
                                <input disabled type='text' name="complement" id="complement" class="form-control" value='{{$member->address->complement}}'>
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

@section('js')
    <script>
        $(document).ready(function(){

            $(".deletMember").on('click', function(){

                var member = $(this).attr('data-member');

                Swal.fire({
                  title: 'Tem certeza?',
                  text: "",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Sim, deletar!',
                  cancelButtonText: 'não',
                }).then((result) => {
                  if (result.value) {
                        window.location = '/church/member/destroy/'+member;
                  }
                })
            })

            $(".resetPassword").on('click', function(){

                var member = $(this).attr('data-member');

                Swal.fire({
                  title: 'Tem certeza?',
                  text: "A senha será resetada para 'igreja123456'",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Sim, resetar!',
                  cancelButtonText: 'não',
                }).then((result) => {
                  if (result.value) {
                        window.location = '/church/member/reset-password/'+member;
                  }
                })
            })
        })             
    </script>
@stop

