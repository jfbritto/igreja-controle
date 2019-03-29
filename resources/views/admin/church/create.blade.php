@extends('adminlte::page')

@section('title', 'Igreja Controle - Igrejas')

@section('content_header')
    <h1><i class="fa fa-home" aria-hidden="true"></i> Igrejas</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('church')}}">Igrejas</a></li>
        <li><a href="#">Cadastrar</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>


<div class="row">

    <div class="col-md-12">

        <div class="box box-primary">
            <!-- form start -->
            <form role="form" method="POST" action="{{ route('church.store') }}">
            @csrf
              <div class="box-body">

                <div class='row'>
                    <div class='col-md-3'>

                        <div class="form-group">
                            <label for='name'>Nome</label> 

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <input id='name' name='name' type="text" class="form-control" required autofocus>
                            </div>
                        </div>

                    </div>                    
                    <div class='col-md-3'>

                        <div class="form-group">
                            <label for='email'>E-mail</label> 

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <input id='email' name='email' type="email" class="form-control" required>
                            </div>
                        </div>

                    </div>
                    <div class='col-md-3'>

                        <div class="form-group">
                            <label for='cnpj'>CNPJ</label> 

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-address-card-o"></i>
                                </div>
                                <input id='cnpj' name='cnpj' type="text" class="form-control" required>
                            </div>
                        </div>

                    </div>
                    <div class='col-md-3'>

                        <div class="form-group">
                            <label for='phone'>Telefone</label> 

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input id='phone' name='phone' type="text" class="form-control" required >
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
                                <input type='text' name="cep" id="cep" class="form-control">
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
                                        <option value="{{$state->id}}">{{$state->nome}}</option>
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
                                <input type='text' name="address" id="address" class="form-control">
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
                                <input type='text' name="number" id="number" class="form-control">
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
                                <input type='text' name="neighborhood" id="neighborhood" class="form-control">
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
                                <input type='text' name="complement" id="complement" class="form-control">
                            </div>
                        </div>
                    
                    </div>
                </div>



              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Cadastrar</button>
              </div>
            </form>
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
        
    </script>    
@stop