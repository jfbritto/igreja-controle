@extends('adminlte::page')

@section('title', 'Igreja Controle - Carteirinhas')

@section('content_header')
    <h1><i class="fa fa-puzzle-piece" aria-hidden="true"></i> Células</h1>

    <ol class="breadcrumb">
    <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('cell')}}"><i class="fa fa-puzzle-piece"></i> Células</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>


@endsection
