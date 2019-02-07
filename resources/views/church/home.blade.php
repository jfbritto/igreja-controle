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

<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Membros por sexo</h3>

                <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                </div>
            </div>
            <div class="box-body" style="">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Faixa de idade</h3>

                <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                </div>
            </div>
            <div class="box-body" style="">
                <canvas id="myChart2"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Membros por sexo</h3>

                <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                </div>
            </div>
            <div class="box-body" style="">
                <canvas id="myChart3"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"></h3>

                <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                </div>
            </div>
            <div class="box-body" style="">
                <canvas id="myChart4"></canvas>
            </div>
        </div>
    </div>
</div>

            

@endsection

@section('js')
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
        labels: ["Mulheres", "Homens"],
        datasets: [{
            label: "My First dataset",
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)'
            ],
            data: [23, 10],
        }]
    },

    // Configuration options go here
    options: {}
});

var ctx2 = document.getElementById("myChart2").getContext('2d');
var myChart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ["Até 18", "19 - 25", "26 - 35", "36 - 45", "Maior que 46"],
        datasets: [{
            label: 'Membros',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

var ctx3 = document.getElementById('myChart3').getContext('2d');
var chart = new Chart(ctx3, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ["Janeiro", "Fevereiro", "Março", "Abril"],
        datasets: [{
            label: "Entradas",
            backgroundColor: [
                'rgba(75, 192, 192, 1)',
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
            ],
            data: [30, 20, 5, 50],
        },{
            label: "Saídas",
            backgroundColor: [
                'rgba(153, 102, 255, 1)',
            ],
            borderColor: [
                'rgba(153, 102, 255, 1)',
            ],
            data: [10, 30, 20, 10],
        }]
    },

    // Configuration options go here
    options: {}
});

var ctx4 = document.getElementById('myChart4').getContext('2d');
var chart = new Chart(ctx4, {
    // The type of chart we want to create
    type: 'doughnut',

    // The data for our dataset
    data: {
        labels: ["Mulheres", "Homens"],
        datasets: [{
            label: "My First dataset",
            backgroundColor: [
                'rgba(255, 206, 86, 0.2)',
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(255, 206, 86, 0.2)',
                'rgba(54, 162, 235, 1)'
            ],
            data: [23, 10],
        }]
    },

    // Configuration options go here
    options: {}
});
</script>
@stop