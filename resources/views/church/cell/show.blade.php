@extends('adminlte::page')

@section('title', 'Igreja Controle - Células')

@section('content_header')
    <h1><i class="fa fa-puzzle-piece" aria-hidden="true"></i> {{$cell->title}}</h1>

    <ol class="breadcrumb">
    <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('cell')}}"><i class="fa fa-puzzle-piece"></i> Células</a></li>
        <li><a href="{{route('cell.show', $cell->id)}}"><i class="fa fa-puzzle-piece"></i> {{$cell->title}}</a></li>
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
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ url()->previous() }}" class='btn btn-default' title="Voltar"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    <a href="{{ url('church/cell/edit', $cell->id) }}" class='btn btn-warning' title="Editar célula"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a data-member="{{$cell->id}}" class='btn btn-danger deletCell' title="Deletar célula"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </div>
            </div>    
        </div>
    </div>
</div>   

<div class="row">
    <div class="col-md-3">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary" style="padding: 10px">
                    <img style="display: block; margin-right: auto; margin-left: auto; cursor: pointer;" src="@if(!is_null($cell->avatar)){{ url('storage/cells/'.$cell->avatar) }} @else {{ url('storage/cells/default.jpg') }} @endif" class='img img-circle' width='149'>
                </div>
            </div>
        </div>
                    
    </div>
    <div class="col-md-9">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
         
                    <div class="box-body">        
                        
                        <div class="row">

                            <div class="col-md-12">

                                <div class='row'>
                                    <div class='col-md-4'>

                                        <div class="form-group">
                                            <label for='title'>Nome</label> 

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-tag"></i>
                                                </div>
                                                <input id='title' name='title' type="text" class="form-control" value="{{ $cell->title }}"  disabled>
                                            </div>
                                        </div>

                                    </div>
                                    <div class='col-md-4'>

                                        <div class="form-group">
                                            <label for='description'>Descrição</label> 

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-align-center"></i>
                                                </div>
                                                <input id='description' name='description' type="text" class="form-control" value="{{ $cell->description }}" disabled>
                                            </div>
                                        </div>

                                    </div>
                                    <div class='col-md-4'>

                                        <div class="form-group">
                                            <label for='nameResponsable'>Responsável</label> 

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <input id='nameResponsable' name='nameResponsable' type="text" class="form-control" value="{{ $cell->nameResponsable }}"  disabled>
                                            </div>
                                        </div>

                                    </div>
                                    <div class='col-md-4'>

                                        <div class="form-group">
                                            <label for='phoneResponsable'>Telefone</label> 

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <input id='phoneResponsable' name='phoneResponsable' type="text" class="form-control" value="{{ $cell->phoneResponsable }}" disabled>
                                            </div>
                                        </div>

                                    </div>
                                    <div class='col-md-4'>

                                        <div class="form-group">
                                            <label for='lat'>Latitude</label> 

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                                <input id='lat' name='lat' type="text" class="form-control" value="{{ $cell->lat }}" disabled>
                                            </div>
                                        </div>

                                    </div>
                                    <div class='col-md-4'>

                                        <div class="form-group">
                                            <label for='long'>Longitude</label> 

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                                <input id='long' name='long' type="text" class="form-control" value="{{ $cell->long }}" disabled>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                
                            </div>

                        </div>

                    </div>
                      
                </div>

            </div>    

        </div>

    </div>
</div>     


@endsection

@section('js')
    <script>

		$(".deletCell").on('click', function(){

		    var cell = $(this).attr('data-cell');

		    Swal.fire({
		      title: 'Tem certeza?',
		      text: "",
		      type: 'warning',
		      showCancelButton: true,
		      confirmButtonColor: '#3085d6',
		      cancelButtonColor: '#d33',
		      confirmButtonText: 'Sim, deletar!',
		      cancelButtonText: 'não',
		    }).then((result) => {
		      if (result.value) {
		            window.location = '/church/cell/destroy/'+cell;
		      }
		    })
		});
            
    </script>
@stop