@extends('adminlte::page')

@section('title', 'Igreja Controle - Configurações')

@section('content_header')
    <h1><i class="fa fa-cog" aria-hidden="true"></i> Configurações</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('config')}}">Configurações</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>

            

@endsection
 