@extends('adminlte::page')

@section('title', 'Igreja Controle - Aniversariantes')

@section('content_header')
    <h1><i class="fa fa-gift" aria-hidden="true"></i> Aniversariantes</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('birth')}}">Aniversariantes</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>


<div class="row">

    <div class="col-md-12">

        <div class="box box-primary">
            <div class="box-header with-border">
                <form method="POST" action="{{route('birth.month')}}">
                @csrf
                    <div class='row'>
                        <div class='col-md-4'>
                            <div class="form-group">
                                <select class="form-control" name="month" onchange="submit(this)">
                                    <option @if($date_month == '01') selected="selected" @endif value="01">Janeiro</option>
                                    <option @if($date_month == '02') selected="selected" @endif value="02">Fevereiro</option>
                                    <option @if($date_month == '03') selected="selected" @endif value="03">Março</option>
                                    <option @if($date_month == '04') selected="selected" @endif value="04">Abril</option>
                                    <option @if($date_month == '05') selected="selected" @endif value="05">Maio</option>
                                    <option @if($date_month == '06') selected="selected" @endif value="06">Junho</option>
                                    <option @if($date_month == '07') selected="selected" @endif value="07">Julho</option>
                                    <option @if($date_month == '08') selected="selected" @endif value="08">Agosto</option>
                                    <option @if($date_month == '09') selected="selected" @endif value="09">Setembro</option>
                                    <option @if($date_month == '10') selected="selected" @endif value="10">Outubro</option>
                                    <option @if($date_month == '11') selected="selected" @endif value="11">Novembro</option>
                                    <option @if($date_month == '12') selected="selected" @endif value="12">Dezembro</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-md-8'>
                            <a target="_blank" href="{{ route('birth.pdf', $date_month) }}" class='btn btn-danger'><i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp; Gerar banner dos aniversariantes do mês</a>
                        </div>
                    </div>

                </form>
            </div>
            
            <div class="box-body">
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
            </div>

        </div>

    </div>    

</div>

            

@endsection
 