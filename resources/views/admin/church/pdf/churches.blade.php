<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Igrejas</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
         
 
 
    <h1>Igrejas</h1>
 
 
    <table class='table table-hover table-striped' id='table'>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>CNPJ</th>
                <th>Telefone</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @forelse($churches as $church)
            <tr>
                <td>{{ $church->name }}</td>
                <td>{{ $church->email }}</td>
                <td>{{ $church->cnpj }}</td>
                <td>{{ $church->phone }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="200">Nenhuma igreja encontrada!</td>
            </tr>
        @endforelse
        </tbody>
    </table>
 
 
 
    </body>
</html>