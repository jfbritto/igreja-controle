@extends('adminlte::page')

@section('title', 'Igreja Controle - Suporte')

@section('content_header')
    <h1><i class="fa fa-comments" aria-hidden="true"></i> Suporte</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('support')}}">Suporte</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>

            

@endsection
