@extends('adminlte::page')

@section('title', 'Igreja Controle - Suporte')

@section('content_header')
    <h1>Suporte</h1>

    <ol class="breadcrumb">
    <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('support')}}">Suporte</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>

            

@endsection
 