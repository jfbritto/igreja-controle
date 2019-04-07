@extends('adminlte::page')

@section('title', 'Igreja Controle - Editar Evento')

@section('content_header')
    <h1>Editar Evento | {{$event->title}}</h1>

    <ol class="breadcrumb">
    <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('event')}}"><i class="fa fa-calendar"></i> Eventos</a></li>
        <li><a href="{{route('event.show', $event->id)}}"><i class="fa fa-calendar"></i> {{$event->title}}</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>


<div class="row">

    <div class="col-md-12">
    

        <div class="box box-primary">
        
            <div class="box-body">

                <div class="row">
                    <div class="col-md-12">

                    <form role="form" method="POST" action="{{ route('event.update', $event->id) }}">
                        @csrf

                        <div class="form-group">
                            <label for='title'>Título</label>  

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-tag"></i>
                                </div>
                                <input id='title' name='title' type="text" class="form-control" value='{{$event->title}}'>
                            </div>
                        </div> 

                        <div class="form-group">
                            <label for='description'>Descrição</label> 

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-align-center"></i>
                                </div>
                                <textarea id='description' name='description' class="form-control">{{$event->description}}</textarea>
                            </div>
                        </div> 
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                    
                        <div class="form-group">
                            <label for='location'>Local</label>  

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <input id='location' name='location' type="text" class="form-control" value='{{$event->location}}'>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for='startDate'>Data inicial</label>  

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input id='startDate' name='startDate' type="date" class="form-control" value='{{$event->startDate}}'>
                            </div>
                        </div>

                    </div>  
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for='endDate'>Data final</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input id='endDate' name='endDate' type="date" class="form-control" value='{{$event->endDate}}'>
                            </div>
                        </div>
                    
                    </div>
                </div>

                @if($event->haveInscription)

                <div class="row">
                    <div class="col-md-4">
                    
                        <div class="form-group responsavel">
                            <label for='nameResponsable'>Responsável</label> 

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input id='nameResponsable' name='nameResponsable' type="text" class="form-control" value='{{$event->nameResponsable}}'>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="form-group responsavel">
                            <label for='phoneResponsable'>Telefone responsável</label>  

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input id='phoneResponsable' name='phoneResponsable' type="text" class="form-control" value='{{$event->phoneResponsable}}'>
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
                                <input id='value' name='value' type="text" class="form-control" value='{{$event->value}}'>
                            </div>
                        </div>
                    
                    </div>
                </div>

                @endif

            </div>
            <div class="box-footer text-right">
                <a href="{{ url()->previous() }}" class='btn btn-default'><i class="fa fa-close" aria-hidden="true"></i>&nbsp; Cancelar</a>
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Salvar</button>
            </div>
            </form>
        </div>   
    </div>
</div>



@endsection


@section('js')

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










