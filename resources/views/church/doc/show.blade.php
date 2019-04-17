@extends('adminlte::page')

@section('title', 'Igreja Controle - Documentos')

@section('content_header')
    <h1><i class="fa fa-file" aria-hidden="true"></i> Documentos</h1>

    <ol class="breadcrumb">
    <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('doc')}}"><i class="fa fa-file"></i> Documentos</a></li>
        <li><a href="#"><i class="fa fa-file"></i> {{$folder->name}}</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>

<div class="box box-primary">
    <div class="box-header with-border">
		Enviar arquivo        
    </div>
    <div class="box-body form-inline">
		<form method="POST" action="{{route('doc.file.store', $folder->id)}}" enctype="multipart/form-data">
			@csrf
			<input type="text" class="form-control" name="name" placeholder="Nome do arquivo">
			<input type="text" class="form-control" name="description" placeholder="Descrição">
			<label class="btn btn-default btn-file">
	            <span id="doc_nome">Escolher Arquivo</span>
	            <input type="file" name="doc" id="doc" style="display: none;" accept=".pdf,.odt,.docx,.xlsx,.ods,.pptx,.odp">
			</label>
			<button class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i> Enviar</button>
		</form>
    </div>
</div>

<div class="box box-primary">
    <div class="box-header with-border">
		Arquivos        
    </div>
    
    <div class="box-body">

		<ul class="list-group">
			
		@forelse($folder->files as $file)
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-1 col-xs-2" style="height: 34px; line-height: 20px;">
						
							@php $ext = explode('.', $file->file_name) @endphp

							@if($ext[1] == 'pdf')
								<i class="fa fa-file-pdf-o" style="font-size: 34px; color: #c60a0a; opacity: 0.7" aria-hidden="true" title="PDF"></i>
							@elseif(($ext[1] == 'odt') or ($ext[1] == 'docx'))
								<i class="fa fa-file-word-o" style="font-size: 34px; color: #2c5796; opacity: 0.7" aria-hidden="true" title="Word"></i> 
							@elseif(($ext[1] == 'xlsx') or ($ext[1] == 'ods'))
								<i class="fa fa-file-excel-o" style="font-size: 34px; color: #1f7045; opacity: 0.7" aria-hidden="true" title="Excel"></i>
							@elseif(($ext[1] == 'pptx') or ($ext[1] == 'odp'))
								<i class="fa fa-file-powerpoint-o" style="font-size: 34px; color: #c83f22; opacity: 0.7" aria-hidden="true" title="PowerPoint"></i>
							@else
								Arquivo
							@endif

					</div>
					<div class="col-md-4 col-xs-3" style="height: 34px; line-height: 34px;">
						{{$file->name}}
					</div>
					<div class="col-md-5 col-xs-3" style="height: 34px; line-height: 34px;">
						{{$file->description}}
					</div>
					
					<div class="col-md-2 col-xs-4 text-right">
						<a target="_blank" href="{{ url('storage/docs/'.$file->file_name) }}" class="btn btn-primary" title="Baixar arquivo"><i class="fa fa-download" aria-hidden="true"></i></a>
						<a data-file='{{$file->id}}' href="#" class="btn btn-danger deletFile" title="Deletar arquivo"><i class="fa fa-trash" aria-hidden="true"></i></a>
					</div>
				</div>
			</li>

		@empty
			<li class="list-group-item">
				Nenhum arquivo encontrado
			</li>
		@endforelse

		</ul>

    </div>
</div>

@endsection

@section('js')
    <script>
        $(document).ready(function () {
			
			$('#doc').change(function(){
	            let arquivo = this.files[0];
	            $('#doc_nome').html(arquivo.name);
	        });
           
			$(".deletFile").on('click', function(){

                var file = $(this).attr('data-file');

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
                        window.location = '/church/file/destroy/'+file;
                  }
                })
            })

        });
    </script>
@stop
