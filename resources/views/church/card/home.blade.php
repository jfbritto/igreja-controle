@extends('adminlte::page')

@section('title', 'Igreja Controle - Carteirinhas')

@section('content_header')
    <h1><i class="fa fa-id-card-o" aria-hidden="true"></i> Carteirinhas</h1>

    <ol class="breadcrumb">
    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('card')}}">Carteirinhas</a></li>
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
                <a target="_blank" href="{{ route('card.pdf') }}" class='btn btn-danger' title="Gerar carteirinhas"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
            </div>
            
            <div class="box-body">

            </div>

        </div>

    </div>    

</div>

            

@endsection
 