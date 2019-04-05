@extends('adminlte::page')

@section('title', 'Igreja Controle - Finanças')

@section('content_header')
    <h1>Adicionar Movimentação</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('finance')}}">Finanças</a></li>
        <li><a href="#">Adicionar movimentação</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>


<div class="row">

    <div class="col-md-12">

        <div class="box box-primary">
            <!-- form start -->
            <form role="form" method="POST" action="{{ route('finance.store') }}">
            @csrf
                <div class="box-body">

                    <div class='row'>
                        <div class='col-md-6'>
                    
                            <div class="form-group">
                                <label for='type'>Operação</label> 

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-circle"></i>
                                    </div>
                                    <select id='type' name='type' class="form-control" required>
                                        <option></option>
                                        <option id='input' value='I'>Entrada</option>
                                        <option id='output' value='O'>Saída</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class='col-md-6' id='action-box'>
                    
                            <div class="form-group">
                                <label for='idAction_fk'>Tipo</label> 

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-circle"></i>
                                    </div>
                                    <select required id='idAction_fk' name='idAction_fk' class="form-control">
                                        <option></option>
                                        @foreach($actions as $action)
                                            <option value='{{$action->id}}'>{{$action->value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class='col-md-6'>

                            <div class="form-group responsavel">
                                <label for='value'>Valor</label>      

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-usd"></i>
                                    </div>
                                    <input id='value' name='value' type="text" class="form-control" required>
                                </div>
                            </div>

                        </div>
                        <div class='col-md-6'>

                            <div class="form-group responsavel">
                                <label for='movimentationDate'>Data da movimentação</label>      

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input id='movimentationDate' name='movimentationDate' type="date" value="{{date('Y-m-d')}}" class="form-control" required>
                                </div>
                            </div>

                        </div>
                        <div class='col-md-12'>
                        
                            <div class="form-group">
                                <label for='comments'>Comentário</label>  

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-align-center"></i>
                                    </div>
                                    <textarea id='comments' name='comments' class="form-control"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>  
                <div class="box-footer text-right">
                    <a href="{{ url()->previous() }}" class='btn btn-default'><i class="fa fa-close" aria-hidden="true"></i>&nbsp; Cancelar</a>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Cadastrar</button>
                </div>  
            </form>  
        </div>
    </div>    
</div>



@endsection

@section('js')
<script>

  $(function() {


    $('#value').mask('#.##0,00', {reverse: true});


    //verifica se o cliente vai pagar ou não
        $("#type").change(function () {
            if ($("#input").is(":selected")) {

                $('#comments').attr('required', false);
                $('#idAction_fk').attr('required', true);
                $('#action-box').show();
            }
            else {
                $('#comments').attr('required', true);
                $('#idAction_fk').attr('required', false);
                $('#action-box').hide();
            }
                
        });


  });

</script>
@stop
