<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta property="og:url" content="http://www.igrejacontrole.com.br/" />
    <meta property="type" content="website" />
    <meta property="og:title" content="{{ $church->name }}">
    <meta property="og:description" content="Inscreva-se no evento {{ $event->title }}">
    <meta property="og:image" content="{{asset("img/background-reduce.jpg")}}">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="640">
    <meta property="og:image:height" content="480">

    <title>Inscrição - {{ $event->title }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/Ionicons/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/site.css') }}">

    <link rel="icon" href="{{asset("img/cross.png")}}">

    @if(config('adminlte.plugins.select2'))
        <!-- Select2 -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css">
    @endif

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/AdminLTE.min.css') }}">

    @if(config('adminlte.plugins.datatables'))
        <!-- DataTables with bootstrap 3 style -->
        <link rel="stylesheet" href="//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css">
    @endif

    @yield('adminlte_css')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <script src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.min.js') }}"></script>
    

</head>
<body class="hold-transition @yield('body_class') masthead">
    

    
    <div class="container-fluid">


        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-green-active">
              <h3 class="widget-user-username">{{ $church->name }}</h3>
              <h5 class="widget-user-desc">Inscrição de evento</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="@if(!is_null($church->avatar)){{ url('storage/churches/'.$church->avatar) }} @else {{ url('storage/churches/default.jpg') }} @endif" alt="User Avatar">
            </div>

        </div>

   
        <div class="row">
            <div class="col-md-12">
                <div class="messages">
                    @include('includes.alerts')
                </div>
            </div>
        </div>        

        <div class="row">
            <div class="col-md-5">

        <div class="row">
            <div class="col-md-12">

                <div class="box box-success box-solid">
                    <div class="box-header with-border">Descrição</div>
                    <div class="box-body">

                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <label for='title'>Evento</label>  

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-tag"></i>
                                        </div>
                                        <input id='title' name='title' type="text" class="form-control" value='{{$event->title}}' readonly>
                                    </div>
                                </div> 

                            </div>
                            <div class="col-md-12">                            
                                <div class="form-group">
                                    <label for='description'>Info</label> 

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-align-center"></i>
                                        </div>
                                        <textarea id='description' name='description' class="form-control" readonly>{{$event->description}}</textarea>
                                    </div>
                                </div> 
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            
                                <div class="form-group">
                                    <label for='location'>Local</label>  

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <input id='location' name='location' type="text" class="form-control" value='{{$event->location}}' readonly>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-8">

                                <div class="form-group">
                                    <label for='startDate'>Período</label>  

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input id='startDate' name='startDate' type="text" class="form-control" value='De {{date("d/m/Y", strtotime($event->startDate))}} à {{date("d/m/Y", strtotime($event->endDate))}}' readonly>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="col-md-4">

                                <div class="form-group responsavel">
                                    <label for='value'>Valor</label>      

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-usd"></i>
                                        </div>
                                        <input id='value' name='value' type="text" class="form-control" value='{{$event->value}}' readonly>
                                    </div>
                                </div>
                            
                            </div>                            
                        </div>

                    </div>
                </div>

            </div>    

        </div>

        </div>
        <div class="col-md-7">
        
        <div class="row">

            <div class="col-md-12">
                <div class="box box-success box-solid">
                    <div class="box-header with-border">Formulário de inscrição</div>

                        <div class="box-body">
                            <!-- form start -->
                            <form role="form" method="POST" action="{{ route('inscription.invite.store', $hash) }}">
                            @csrf

                            <div class='row'>
                                <div class='col-md-6'>

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
                                <div class='col-md-6'>

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

                            </div>
                            <div class='row'>    

                                <div class='col-md-6'>
                                
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
                                

                                <div class='col-md-6'>

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

                            </div>
                            <div class='row'>

                                <div class='col-md-6'>

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
                                <div class='col-md-6'>

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
                      <div class="box-footer text-right">
                        <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Cadastrar</button>
                      </div>
          
                  </div>

            </div>    

        </div>

        </div>
        </div>

        

    </div>

<script src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

@if(config('adminlte.plugins.select2'))
    <!-- Select2 -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
@endif

@if(config('adminlte.plugins.datatables'))
    <!-- DataTables with bootstrap 3 renderer -->
    <script src="//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js"></script>
@endif

@if(config('adminlte.plugins.chartjs'))
    <!-- ChartJS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js"></script>
@endif

    <script src="{{ asset('assets/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js') }}"></script>
@yield('adminlte_js')



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





</body>
</html>

