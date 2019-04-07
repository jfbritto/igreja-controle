@extends('adminlte::page')

@section('title', 'Igreja Controle - Cadastrar Inscrição')

@section('content_header')
    <h1>Cadastrar Inscrição | {{$event->title}}</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('inscription')}}">Inscrições</a></li>
        <li><a href="{{route('inscription.show', $event->id)}}">{{$event->title}}</a></li>
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
                <div class="box-header with-border">
                    <a href="{{ route('event.show', $event->id) }}" class='btn btn-default'><i class="fa fa-close" aria-hidden="true"></i>&nbsp; Cancelar</a>
                </div>
                <div class="box-body">
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('inscription.store', $event->id) }}">
                    @csrf

                    <div class='row'>
                        <div class='col-md-4'>

                            <div class="form-group responsavel">
                                <label for='name'>Nome</label> 

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input id='name' name='name' type="text" class="form-control" required>
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
                                    <select id='sex' name='sex' class="form-control" required>
                                        <option>-- Selecione --</option>
                                        <option value='masculino'>Masculino</option>
                                        <option value='feminino'>Feminino</option>
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
                                    <input id='birth' name='birth' type="date" class="form-control" required>
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
                                    <input id='email' name='email' type="email" class="form-control" required>
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
                                    <input id='phone' name='phone' type="text" class="form-control" required >
                                </div>
                            </div>

                        </div>
                        <div class='col-md-4'>

                            <div class="form-group responsavel">
                                <label for='church'>Igreja</label> 

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <input id='church' name='church' type="text" class="form-control" required value='{{ $church->name }}'>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-6'>

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
                        <div class='col-md-6'>

                            <div class="form-group responsavel">
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


                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Cadastrar</button>
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



