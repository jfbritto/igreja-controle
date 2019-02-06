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
            float: left;
            margin-top: 170px;
            margin-left: 15px;
        }

        .member-avatar {
            float: left;
            margin-top: 50px;
            margin-left: 15px;
        }

        </style>

    </head>
    <body>
         
 
 

        @forelse($members as $member)


        <div class="card">
            <div class="member-name" title="member">{{$member->name}}</div>
            <div class='member-avatar'>
                @if($member->avatar != null)
                <img class="img img-circle" src="{{ url('storage/members/'.$member->avatar) }}" width='100'>
                @else 
                <img class="img img-circle" src="{{ url('storage/members/default.jpg') }}" width='100'>
                @endif
            </div>
        </div>


        @empty

        @endforelse
 
    </body>
</html>