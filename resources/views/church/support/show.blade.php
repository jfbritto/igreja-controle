@extends('adminlte::page')

@section('title', 'Igreja Controle - Visualizar Mensagem')

@section('content_header')
    <h1>Visualizar Mensagem</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('support')}}">Suporte</a></li>
        <li><a href="#">Visualizar Mensagem</a></li>
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

                <div class='row'>
                    <div class='col-md-6'>

                        <div class="form-group">
                            <label for='answerDate'>Data envio</label> 

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input id='answerDate' name='answerDate' type="text" class="form-control" value="{{date('d/m/Y H:i:s', strtotime($message->created_at)) }}" readonly>
                            </div>
                        </div>

                    </div>
                    <div class='col-md-6'>

                        <div class="form-group">
                            <label for='situation'>Situação</label> 

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-exclamation"></i>
                                </div>
                                <input id='situation' name='situation' type="text" class="form-control" value="@if($message->isOpen) Aberta @else Finalizada @endif" readonly>
                            </div>
                        </div>

                    </div>
                    <div class='col-md-6'>

                        <div class="form-group">
                            <label for='subject'>Assunto</label> 

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-tag"></i>
                                </div>
                                <input id='subject' name='subject' type="text" class="form-control" value='{{$message->subject}}' readonly>
                            </div>
                        </div>

                    </div>
                    <div class='col-md-6'>

                        <div class="form-group">
                            <label for='type'>Tipo</label> 

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-circle"></i>
                                </div>
                                <select id='type' name='type' class="form-control" readonly>
                                    <option>-- Selecione o tipo --</option>
                                    @foreach($types as $type)
                                        <option value='{{$type->id}}' @if($message->type == $type->id) selected='selected' @endif>{{ $type->value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class='col-md-12'>

                        <div class="form-group">
                            <label for='message'>Mensagem</label> 

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-align-center"></i>
                                </div>
                                <textarea id='message' name='message' class="form-control" readonly>{{$message->message}}</textarea>
                            </div>
                        </div>

                    </div>

                </div>        

            </div>

        </div>

    </div>    

</div>


@if(!$message->isOpen)  

<div class="row">

    <div class="col-md-12">

        <div class="box box-primary">
            <div class="box-body">

                <div class='row'>
                    <div class='col-md-12'>

                        <div class="form-group">
                            <label for='answerDate'>Data resposta</label> 

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input id='answerDate' name='answerDate' type="text" class="form-control" value="@if(!is_null($message->answerDate)) {{date('d/m/Y H:i:s', strtotime($message->answerDate)) }} @endif" readonly>
                            </div>
                        </div>

                    </div>
                    <div class='col-md-12'>

                        <div class="form-group">
                            <label for='message'>Resposta</label> 

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-align-center"></i>
                                </div>
                                <textarea id='message' name='message' class="form-control" readonly>{{$message->answer}}</textarea>
                            </div>
                        </div>

                    </div>

                </div>        

            </div>

        </div>

    </div>    

</div>

@endif

@endsection
