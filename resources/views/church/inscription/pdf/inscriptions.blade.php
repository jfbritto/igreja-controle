<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Inscritos</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
         
 
 
    <h1>Inscritos</h1>
 
 
    <table class='table table-hover table-striped' id='table'>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Nascimento</th>
                <th>Telefone</th>
                <th>Situação</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @forelse($inscriptions as $inscript)
            <tr class="@if($inscript->isPaid) success @else warning @endif">
                <td>{{ $inscript->name }}</td>
                <td>{{ $inscript->email }}</td>
                <td>{{ date('d/m/Y', strtotime($inscript->birth)) }}</td>
                <td>{{ $inscript->phone }}</td>
                <td>@if($inscript->isPaid) Pago @else Pendente @endif</td>
            </tr>
        @empty
            <tr>
                <td colspan="200">Nenhum membro faz aniversário nessa data!</td>
            </tr>
        @endforelse
        </tbody>
    </table>
 
 
 
    </body>
</html>