@extends('adminlte::page')

@section('title', 'Igreja Controle - Financeiro')

@section('content_header')
    <h1>Financeiro</h1>

    <ol class="breadcrumb">
    <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('finance')}}">Financeiro</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>

            

@endsection
 