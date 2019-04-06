<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Membros - {{auth()->user()->church->name}}</title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
         
 
 
    <h1>Membros - {{auth()->user()->church->name}}</h1>
 
 
    <table class='table table-hover table-striped' id='table'>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Nascimento</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @forelse($members as $member)
            <tr>
                <td>{{ $member->name }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ date('d/m/Y', strtotime($member->birth)) }}</td>
                <td>{{ $member->cpf }}</td>
                <td>{{ $member->phone }}</td>
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