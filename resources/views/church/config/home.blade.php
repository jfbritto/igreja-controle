@extends('adminlte::page')

@section('title', 'Igreja Controle - Configurações')

@section('content_header')
    <h1><i class="fa fa-cog" aria-hidden="true"></i> Configurações</h1>

    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('config')}}">Configurações</a></li>
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
              <div class="box-body">

                <div class='row'>
                    <div class='col-md-6'>

                        <div class="form-group">
                            <label for='name'>Igreja</label> 

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <input id='name' name='name' type="text" class="form-control" value="{{$church->name}}" readonly>
                            </div>
                        </div>

                    </div>
                    <div class='col-md-6'>
                
                        <div class="form-group">
                            <label for='email'>E-mail</label> 

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <input id='email' name='email' type="text" class="form-control" value="{{$church->email}}" readonly>
                            </div>
                        </div>

                    </div>
                    
                </div>
                <div class='row'>
                    
                    <div class='col-md-6'>
                    
                        <div class="form-group">
                            <label for='cnpj'>CNPJ</label> 

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-address-card-o"></i>
                                </div>
                                <input id='cnpj' name='cnpj' type="text" class="form-control" value="{{$church->cnpj}}" readonly>
                            </div>
                        </div>

                    </div>
                    
                    <div class='col-md-6'>

                        <div class="form-group">
                            <label for='phone'>Telefone</label> 

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input id='phone' name='phone' type="text" class="form-control" value="{{$church->phone}}" readonly >
                            </div>
                        </div>

                    </div>

                </div>
              </div>
              <!-- /.box-body -->
  
          </div>

    </div>    

</div>

<div class="row">

    <div class="col-md-12">

        <div class="box box-primary">
            <!-- form start -->
            <form role="form" method="POST" action="{{ route('config.update') }}" enctype="multipart/form-data">
            @csrf
              <div class="box-body">

                <div class='row'>
                    <div class='col-md-2'>

                       <img src="@if(!is_null($church->avatar)){{ url('storage/churches/'.$church->avatar) }} @else {{ url('storage/churches/default.jpg') }} @endif" class='img img-circle' width='80'>

                    </div>
                    <div class='col-md-10'>

                        <div class="form-group">
                            <label for='avatar'>Imagem</label> 

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-picture-o"></i>
                                </div>
                                <input id='avatar' name='avatar' type="file" class="form-control">
                            </div>
                        </div>

                    </div>                    
                </div>

              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Salvar</button>
              </div>

            </form>
          </div>
    </div>    

</div>
            

@endsection
