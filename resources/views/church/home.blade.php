@extends('adminlte::page')

@section('title', 'Igreja Controle - Home')

@section('content_header')
    <h1>Você está logado!</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('home')}}">Home</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>

            

@endsection
 