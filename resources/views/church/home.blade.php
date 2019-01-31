@extends('adminlte::page')

@section('title', 'Igreja Controle - Home')

@section('content_header')
    <h1><i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>

            

@endsection
 