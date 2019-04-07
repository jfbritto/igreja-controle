@extends('adminlte::page')

@section('title', 'Igreja Controle - Carteirinhas')

@section('content_header')
    <h1><i class="fa fa-id-card-o" aria-hidden="true"></i> Carteirinhas</h1>

    <ol class="breadcrumb">
    <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('card')}}"><i class="fa fa-id-card-o"></i> Carteirinhas</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>


<div class="row">

    <div class="col-md-12">

        <div class="box box-primary">
            <div class="box-header with-border text-right">
                <a target="_blank" href="{{ route('card.pdf') }}" class='btn btn-danger' title="Gerar carteirinhas"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
            </div>
            
            <div class="box-body">

                <div class="box-body">
                    <table class='table table-hover table-striped' id='table'>
                        <thead>
                            <tr>
                                <th><input type="checkbox" name=""> </th>
                                <th></th>
                                <th>Nome</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($members as $member)
                            <tr>
                                <td><input type="checkbox" name=""></td>
                                <td style='vertical-align:middle'><img src="@if(!is_null($member->avatar)){{ url('storage/members/'.$member->avatar) }} @else {{ url('storage/members/default.jpg') }} @endif" class='img img-circle' width='40'></td>
                                <td style='vertical-align:middle'>{{ $member->name }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="200">Nenhum membro faz aniversário nessa data!</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </div>    

</div>

            

@endsection
 