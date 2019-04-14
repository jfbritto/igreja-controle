@extends('adminlte::page')

@section('title', 'Igreja Controle - Documentos')

@section('content_header')
    <h1><i class="fa fa-file" aria-hidden="true"></i> Criar pasta</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('doc')}}"><i class="fa fa-file"></i> Documentos</a></li>
        <li><a href="#"> Criar pasta</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>


<form role="form" method="POST" action="{{ route('doc.store') }}">
@csrf


    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
     
                <div class="box-body">        
                    
                    <div class="row">

                        <div class="col-md-12">

                            <div class='row'>
                                <div class='col-md-12'>

                                    <div class="form-group">
                                        <label for='name'>Nome</label> 

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-tag"></i>
                                            </div>
                                            <input id='name' name='name' type="text" class="form-control" value="{{ old('name') }}" required placeholder="Nome da pasta">
                                        </div>
                                    </div>

                                </div>
                                <div class='col-md-12'>

                                    <div class="form-group">
                                        <label for='description'>Descrição (opcional)</label> 

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-align-center"></i>
                                            </div>
                                            <textarea id='description' name='description' class="form-control">{{ old('description') }}</textarea>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            
                        </div>

                    </div>

                </div>
                <div class="box-footer text-right">
                    <a href="{{ url()->previous() }}" class='btn btn-default'><i class="fa fa-close" aria-hidden="true"></i>&nbsp; Cancelar</a>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Salvar</button>
                </div>
                  
            </div>

        </div>    

    </div>

</form> 


@endsection