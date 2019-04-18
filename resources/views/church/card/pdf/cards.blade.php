<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Carteirinhas</title>

        <style type="text/css">
        
        .card {
            /*margin: auto;*/
            width: 85.60mm;
            height: 53.98mm;
            font: 22px/1 @monospace;
            background: #fff;
            border: 1px solid grey;
            border-radius: 10px;
            margin-bottom: 10px;
            position: relative;
            display: inline-block;
        }

        .member-name {
            /*float: left;*/
            margin-top: 170px;
            margin-left: 15px;
        }

        .church-name {
            position: absolute;
            margin-top: 15px;
            margin-left: 15px;
        }


        .member-avatar {
            position: absolute;
            top: 54px;
            left: 15px;
            border-radius: 5px;
        }

        .page_break { page-break-before: always; }

        body {
            padding-top: 25px;
        }

        </style>

    </head>
    <body>
         

        @forelse($members as $key => $member)


            <div style="width: 100%;">
                
                <div class="card">
                    <div class="church-name">Igreja {{$member->church->name}}</div>
                    <div class="member-name">{{$member->name}}</div>

                    
                        @if($member->avatar != null)
                        <img class="member-avatar" src="{{ url('storage/members/'.$member->avatar) }}" width='100'>
                        @else 
                        <img class="member-avatar" src="{{ url('storage/members/default.jpg') }}" width='100'>
                        @endif
                    
                </div>
                <div class="card">
                    <div class="church-name">Igreja {{$member->church->name}}</div>
                    <div class="member-name">{{$member->name}}</div>

                        @if($member->church->avatar != null)
                        <img class="member-avatar" src="{{ url('storage/churches/'.$member->church->avatar) }}" width='100'>
                        @else 
                        <img class="member-avatar" src="{{ url('storage/churches/default.jpg') }}" width='100'>
                        @endif

                </div>

            </div>


            @if( ($key+1) %4 == 0 && ($key+1) < count($members) )

                <div class="page_break"></div>

            @endif


        @empty

        @endforelse
 
    </body>
</html>