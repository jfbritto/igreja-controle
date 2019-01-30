@extends('adminlte::page')

@section('title', 'Igreja Controle - Carteirinhas')

@section('content_header')
    <h1>Carteirinhas</h1>

    <ol class="breadcrumb">
    <li><a href="{{route('home')}}">Home</a></li>
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
            <div class="box-header with-border">
                <a target="_blank" href="{{ route('card.pdf') }}" class='btn btn-success'>Gerar carteirinhas</a>
            </div>
            
            <div class="box-body">

            </div>

        </div>

    </div>    

</div>

            

@endsection
 