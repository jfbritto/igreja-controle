@extends('adminlte::page')

@section('title', 'Igreja Controle - Inscrições')

@section('content_header')
    <h1><i class="fa fa-check-square-o" aria-hidden="true"></i> Inscrições</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('inscription')}}">Inscrições</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>

            

@endsection
 