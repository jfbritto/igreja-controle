@extends('adminlte::page')

@section('title', 'Igreja Controle - '. $church->name)

@section('content_header')
    <h1><i class="fa fa-home" aria-hidden="true"></i> {{$church->name}}</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('admindash')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('church')}}"><i class="fa fa-home"></i> Igrejas</a></li>
        <li><a href="#"><i class="fa fa-home"></i> {{$church->name}}</a></li>
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
                    <a href="{{ route('church.edit', $church->id) }}" class='btn btn-warning' title="Editar membro"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a data-church='{{$church->id}}' class='btn btn-danger deletChurch' title="Deletar membro"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
                                    <div class='col-md-6'>

                                        <div class="form-group">
                                            <label for='name'>Nome</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-home"></i>
                                                </div>
                                                <input id='name' name='name' type="text" class="form-control" disabled value="{{ $church->name }}" autofocus>
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
                                                <input id='email' name='email' type="email" class="form-control" value="{{ $church->email }}" disabled>
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
                                                <input id='cnpj' name='cnpj' type="text" class="form-control" value="{{ $church->cnpj }}" disabled>
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
                                                <input id='phone' name='phone' type="text" class="form-control" value="{{ $church->phone }}" disabled >
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
                                <input type='text' name="cep" id="cep" class="form-control" value="{{$church->address->cep}}" disabled>
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
                                <select name="idState_fk" id="idState_fk" onchange="changeState(this)" class="form-control" disabled>
                                    <option>Selecione o estado</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->id}}" @if($state->id == $church->address->idState_fk) selected='selected' @endif >{{$state->nome}}</option>
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
                                <select name="idCity_fk" id="idCity_fk" class="form-control" disabled>
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
                                <input type='text' name="address" id="address" class="form-control" disabled value="{{$church->address->address}}">
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
                                <input type='text' name="number" id="number" class="form-control" disabled value="{{$church->address->number}}">
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
                                <input type='text' name="neighborhood" id="neighborhood" class="form-control" disabled value="{{$church->address->neighborhood}}">
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
                                <input type='text' name="complement" id="complement" class="form-control" disabled value="{{$church->address->complement}}">
                            </div>
                        </div>

                    </div>
                </div>



              </div>
              <!-- /.box-body -->

          </div>

    </div>

</div>


<div class="row">

    <div class="col-md-12">

        <div class="box box-primary">
            <div class="box-header with-border text-right">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a target="_blank" href="{{ route('church.user.pdf') }}" class='btn btn-danger' title="Gerar PDF com todos os usuários"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
                    <a href="{{ route('church.user.create', $church->id) }}" class='btn btn-success' title="Novo usuário"><i class="fa fa-plus" aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="box-body">
                <table class='table table-hover table-striped table-condensed' id='table'>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nome</th>
                            <th class='hidden-xs'>Email</th>
                            <th class='hidden-xs'>Telefone</th>
                            <th class='hidden-xs'>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($church->admins() as $user)
                        <tr class="{{ $user->isPendent ? 'info' : (!$user->isActive ? 'danger' : '') }} ">
                            <td style='vertical-align:middle'><img src="@if(!is_null($user->avatar)){{ url('storage/members/'.$user->avatar) }} @else {{ url('storage/members/default.jpg') }} @endif" class='img img-circle' width='40'></td>
                            <td style='vertical-align:middle'>{{ $user->name }}</td>
                            <td style='vertical-align:middle' class='hidden-xs'>{{ $user->email }}</td>
                            <td style='vertical-align:middle' class='hidden-xs'>{{ $user->phone }}</td>
                            <td style='vertical-align:middle' class='hidden-xs'>
                                @if($user->isActive) Ativo @else Inativo @endif
                            </td>
                            <td style='vertical-align:middle; width: 160px' class='text-right'>
                                <div class="btn-group" role="group" aria-label="Basic example">

                                    @if($user->isDeleted)
                                        Deletado
                                    @else

                                        @if($user->isActive)
                                            <a data-user='{{$user->id}}' class='btn btn-danger inactiveUser' title="Inativar usuário"><i class="fa fa-power-off" aria-hidden="true"></i></a>
                                        @else
                                            <a href="{{ url('admin/church/user/activate', $user->id) }}" class='btn btn-success' title="Ativar usuário"><i class="fa fa-power-off" aria-hidden="true"></i></a>
                                        @endif

                                        <a data-user='{{$user->id}}' class='btn btn-danger deletUser' title="Deletar usuário"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        <a href="{{ url('admin/church/user/edit', $user->id) }}" class='btn btn-warning' title="Editar usuário"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <a href="{{ url('admin/church/user/show', $user->id) }}" class='btn btn-primary' title="Visualizar usuário"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                    @endif
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td style='vertical-align:middle' colspan="200">Nenhum usuário cadastrado!</td>
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

        $(document).ready(function(){
            $(".deletChurch").on('click', function(){

                var church = $(this).attr('data-church');

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
                        window.location = '/admin/church/destroy/'+church;
                  }
                })
            })

            $(".deletUser").on('click', function(){

                var user = $(this).attr('data-user');

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
                        window.location = '/admin/church/user/destroy/'+user;
                  }
                })
            })

            $(".inactiveUser").on('click', function(){

                var user = $(this).attr('data-user');

                Swal.fire({
                  title: 'Tem certeza?',
                  text: "",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Sim, inativar!',
                  cancelButtonText: 'não',
                }).then((result) => {
                  if (result.value) {
                        window.location = '/admin/church/user/inactivate/'+user;
                  }
                })
            })
        })

    </script>
@stop
