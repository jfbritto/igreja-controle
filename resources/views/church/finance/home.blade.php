@extends('adminlte::page')

@section('title', 'Igreja Controle - Finanças')

@section('content_header')
    <h1><i class="fa fa-money" aria-hidden="true"></i> Finanças</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('finance')}}">Finanças</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>

            

@endsection
 