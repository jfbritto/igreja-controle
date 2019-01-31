@extends('adminlte::page')

@section('title', 'Igreja Controle - Eventos')

@section('content_header')
    <h1>{{$event->title}}</h1>

    <ol class="breadcrumb">
    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('event')}}">Eventos</a></li>
        <li><a href="#">{{$event->title}}</a></li>
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
                <a href="{{ url('church/event/edit', $event->id) }}" class='btn btn-warning'>Editar</a>
                <a href="{{ url('church/event/destroy', $event->id) }}" class='btn btn-danger'>Deletar</a>
            </div>

            <div class="box-body">

                <div class="row">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label for='title'>Título</label>  

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-tag"></i>
                                </div>
                                <input id='title' name='title' type="text" class="form-control" value='{{$event->title}}' readonly>
                            </div>
                        </div> 

                        <div class="form-group">
                            <label for='description'>Descrição</label> 

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
                    <div class="col-md-4">
                    
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
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for='startDate'>Data inicial</label>  

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input id='startDate' name='startDate' type="date" class="form-control" value='{{$event->startDate}}' readonly>
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
                                <input id='endDate' name='endDate' type="date" class="form-control" value='{{$event->endDate}}' readonly>
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
                                <input id='nameResponsable' name='nameResponsable' type="text" class="form-control" value='{{$event->nameResponsable}}' readonly>
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
                                <input id='phoneResponsable' name='phoneResponsable' type="text" class="form-control" value='{{$event->phoneResponsable}}' readonly>
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

                @endif

            </div>
        </div>   

    </div>
</div>


@if($event->haveInscription)

<h2>Inscritos</h2>

<div class="row">

    <div class="col-md-12">

        <div class="box box-primary">
            <div class="box-header with-border">
                <a href="" class='btn btn-success'>Cadastrar inscrição</a>
            </div>

            <div class="box-body">


            </div>
        </div>   

    </div>
</div>

@endif



@endsection










