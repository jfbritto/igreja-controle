@extends('adminlte::page')

@section('title', 'Igreja Controle - Área do membro')

@section('content_header')
    <h1><i class="fa fa-user" aria-hidden="true"></i> Bem vinto, {{auth()->user()->name}}!</h1>
    <h3>Desculpe, ainda estamos desenvolvendo esta página!</h3>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>


@endsection
