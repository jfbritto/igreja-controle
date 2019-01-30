<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Carteirinhas</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <style type="text/css">
        
        .card {
            margin: auto;
            width: 85.60mm;
            height: 53.98mm;
            font: 22px/1 @monospace;
            background: #fff;
            border: 1px solid grey;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .member-name {
            float: right;
            margin-top: 15px;
            margin-right: 30px;
        }

        </style>

    </head>
    <body>
         
 
 

        @forelse($members as $member)


        <div class="card">
            <div class="member-name" title="member">{{$member->name}}</div>
        </div>


        @empty

        @endforelse
 
    </body>
</html>