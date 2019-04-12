@extends('adminlte::page')

@section('title', 'Igreja Controle - Cadastrar Inscrição')

@section('content_header')
    <h1><i class="fa fa-check-square-o" aria-hidden="true"></i> Informar pagamento</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('inscription')}}"><i class="fa fa-check-square-o"></i> Inscrições</a></li>
        <li><a href="{{route('event.show', $inscription->event->id)}}"><i class="fa fa-calendar"></i> {{$inscription->event->title}}</a></li>
        <li><a href="#">Informar pagamento</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>

<form role="form" method="POST" action="{{ route('inscription.report_payment', $inscription->id) }}">
@csrf

<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-body">
                <div class='row'>
                    <div class='col-md-12'>

                        <div class="form-group">
                            <label for="info">Informações adicionais do pagamento</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-align-center"></i>
                                </div>
                                <textarea id='info' name='info' class="form-control"></textarea>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer text-right">
                <a href="{{ url()->previous() }}" class='btn btn-default'><i class="fa fa-close" aria-hidden="true"></i>&nbsp; Cancelar</a>
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Concluir</button>
          </div>
        </div>
    </div>    
</div>

</form>


@endsection



