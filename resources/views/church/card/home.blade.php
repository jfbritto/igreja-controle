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

            

@endsection
 