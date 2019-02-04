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

<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
        <div class="inner">
            <h3>150</h3>

            <p>Caixa total</p>
        </div>
        <div class="icon">
            <i class="fa fa-usd"></i>
        </div>
        <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
        <div class="inner">
            <h3>150</h3>

            <p>Entradas</p>
        </div>
        <div class="icon">
            <i class="fa fa-usd"></i>
        </div>
        <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
        <div class="inner">
            <h3>150</h3>

            <p>Saídas</p>
        </div>
        <div class="icon">
            <i class="fa fa-usd"></i>
        </div>
        <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
        <div class="inner">
            <h3>150</h3>

            <p>Balanço mensal</p>
        </div>
        <div class="icon">
            <i class="fa fa-usd"></i>
        </div>
        <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>
<!-- ./col -->
</div>
            

@endsection
 