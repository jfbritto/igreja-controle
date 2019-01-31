@extends('adminlte::page')

@section('title', 'Igreja Controle - Eventos')

@section('content_header')
    <h1><i class="fa fa-calendar" aria-hidden="true"></i> Eventos</h1>

    <ol class="breadcrumb">
    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('event')}}">Eventos</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>


<div class="row">

    <div class="col-md-3">

        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Criar evento</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ route('event.store') }}">
            @csrf
              <div class="box-body">

                <div class="form-group">
                    <label for='title'>Título</label>  

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-tag"></i>
                        </div>
                        <input id='title' name='title' type="text" class="form-control" required>
                    </div>
                </div>    

                <div class="form-group">
                    <label for='description'>Descrição</label> 

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-align-center"></i>
                        </div>
                        <textarea id='description' name='description' class="form-control"></textarea>
                    </div>
                </div>  

                <div class="form-group">
                    <label for='location'>Local</label>  

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <input id='location' name='location' type="text" class="form-control" value='{{ $church->name }}'>
                    </div>
                </div>

                <div class="form-group">
                    <label for='startDate'>Data inicial</label>  

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input id='startDate' name='startDate' type="date" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for='endDate'>Data final</label>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input id='endDate' name='endDate' type="date" class="form-control" required>
                    </div>
                </div>

                <label>Habilitar inscrições?</label> 
                <div class="checkbox">
                  <label for='radio-sim'>
                    <input id='radio-sim' type="radio" name="inscricoes" value="sim"> Sim
                  </label>
                </div>
                <div class="checkbox">
                  <label for='radio-nao'>
                    <input id='radio-nao' type="radio" name="inscricoes" value="nao" checked="checked"> Não
                  </label>
                </div>

                <div class="form-group responsavel" style="display:none">
                    <label for='nameResponsable'>Responsável</label> 

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input id='nameResponsable' name='nameResponsable' type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group responsavel" style="display:none">
                    <label for='phoneResponsable'>Telefone responsável</label>  

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input id='phoneResponsable' name='phoneResponsable' type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group responsavel" style="display:none">
                    <label for='value'>Valor</label>      

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-usd"></i>
                        </div>
                        <input id='value' name='value' type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for=''>Escolha a cor do card</label>                                    
                    <input id='color' name='color' type="color" class="form-control" value='#3c8dbc'>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
          </div>

    </div>    
    <div class="col-md-9">

    <div class="box box-primary">
            <div class="box-body no-padding">
                {!! $calendar->calendar() !!}
                {!! $calendar->script() !!}
            </div>
        </div>

    </div>


</div>


@endsection


@section('js')
<script src="{{ asset('assets/fullcalendar-3.10.0/lib/moment.min.js') }}"></script>
<script src="{{ asset('assets/fullcalendar-3.10.0/fullcalendar.min.js') }}"></script>
<script src="{{ asset('assets/fullcalendar-3.10.0/locale/pt-br.js') }}"></script>


<link rel="stylesheet" href="{{ asset('assets/fullcalendar-3.10.0/fullcalendar.min.css') }} "/>

<script>

  $(function() {



    $("#radio-sim, #radio-nao").change(function () {

        if ($("#radio-sim").is(":checked")) {
            $('.responsavel').show();
        }
        else{
            $('.responsavel').hide();
        }
    });

    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };

    $('#phoneResponsable').mask(SPMaskBehavior, spOptions);

    $('#value').mask('#.##0,00', {reverse: true});

  });

</script>
@stop