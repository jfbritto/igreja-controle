<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Balanço Mensal</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <style>
            .red
            {
                color:#dd4b39;
            }
            .green
            {
                color:#00a65a;
            }
        </style>
    </head>
    <body>
         
 
 
    <h1 class='text-center'>Balanço Mensal</h1>
    <h3 class='text-center'>{{$church->name}} - {{$month}}/{{$year}}</h3>
 
    <table class='table table-hover table-striped table-bordered' id='table'>
        <thead>
            <tr>
                <th colspan='2'>ENTRADAS</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inputs as $input)
            <tr>
                <td>{{mb_strtoupper($input->action, "UTF-8")}}</td>
                <td class='green'>R$ {{number_format($input->total, 2, ',', '.')}}</td>
            </tr>
            @endforeach
            <tr>
                <td>TOTAL DO MÊS ANTERIOR</td>
                <td class='green'>R$ {{number_format($before_months, 2, ',', '.')}}</td>
            </tr>
            <tr>
                <th class='text-right'>TOTAL ENTRADAS</th>
                <td class='green'>R$ {{number_format($inputs_sum, 2, ',', '.')}}</td>
            </tr>
        </tbody>
    </table>


    <table class='table table-hover table-striped table-bordered' id='table'>
        <thead>
            <tr>
                <th colspan='2'>SAÍDAS</th>
            </tr>
        </thead>
        <tbody>
            @foreach($outputs as $output)
            <tr>
                <td>{{mb_strtoupper($output->comments, "UTF-8")}}</td>
                <td class='red'>R$ {{number_format($output->value, 2, ',', '.')}}</td>
            </tr>
            @endforeach
            <tr>
                <th class='text-right'>TOTAL SAÍDAS</th>
                <td class='red'>R$ {{number_format($outputs_sum, 2, ',', '.')}}</td>
            </tr>
        </tbody>
    </table>

    <table class='table table-hover table-striped table-bordered' id='table'>
        <thead>
            <tr>
                <th colspan='2'>BALANÇO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th class='text-right'>TOTAL ENTRADAS</th>
                <td class='green'>R$ {{number_format($inputs_sum, 2, ',', '.')}}</td>
            </tr>
            <tr>
                <th class='text-right'>TOTAL SAÍDAS</th>
                <td class='red'>R$ {{number_format($outputs_sum, 2, ',', '.')}}</td>
            </tr>
            <tr>
                <th class='text-right'>SALDO PARA O MÊS SEGUINTE</th>
                <td>R$ {{number_format($next_month, 2, ',', '.')}}</td>
            </tr>
        </tbody>
    </table>
 
 
 
    </body>
</html>