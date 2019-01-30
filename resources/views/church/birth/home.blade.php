@extends('adminlte::page')

@section('title', 'Igreja Controle - Aniversariantes')

@section('content_header')
    <h1>Aniversariantes</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('birth')}}">Aniversariantes</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>

            

@endsection
 