@extends('adminlte::page')

@section('title', 'Igreja Controle - Eventos')

@section('content_header')
    <h1><i class="fa fa-calendar" aria-hidden="true"></i> {{$event->title}} @if($event->endDate < date('Y-m-d'))- Evento encerrado @endif</h1>

    <ol class="breadcrumb">
    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('event')}}">Eventos</a></li>
        <li><a href="#">{{$event->title}}</a></li>
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
                <a href="{{ url()->previous() }}" class='btn btn-default' title="Voltar"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>

                @if($event->endDate > date('Y-m-d'))
                    <a href="{{ url('church/event/edit', $event->id) }}" class='btn btn-warning' title="Editar evento"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="{{ url('church/event/destroy', $event->id) }}" class='btn btn-danger' title="Deletar evento"><i class="fa fa-trash" aria-hidden="true"></i></a>
                @endif

            </div>

            <div class="box-body">

                <div class="row">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label for='title'>Título</label>  

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-tag"></i>
                                </div>
                                <input id='title' name='title' type="text" class="form-control" value='{{$event->title}}' readonly>
                            </div>
                        </div> 

                        <div class="form-group">
                            <label for='description'>Descrição</label> 

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-align-center"></i>
                                </div>
                                <textarea id='description' name='description' class="form-control" readonly>{{$event->description}}</textarea>
                            </div>
                        </div> 
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                    
                        <div class="form-group">
                            <label for='location'>Local</label>  

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <input id='location' name='location' type="text" class="form-control" value='{{$event->location}}' readonly>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for='startDate'>Data inicial</label>  

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input id='startDate' name='startDate' type="date" class="form-control" value='{{$event->startDate}}' readonly>
                            </div>
                        </div>

                    </div>  
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for='endDate'>Data final</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input id='endDate' name='endDate' type="date" class="form-control" value='{{$event->endDate}}' readonly>
                            </div>
                        </div>
                    
                    </div>
                </div>

                @if($event->haveInscription)

                <div class="row">
                    <div class="col-md-4">
                    
                        <div class="form-group responsavel">
                            <label for='nameResponsable'>Responsável</label> 

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input id='nameResponsable' name='nameResponsable' type="text" class="form-control" value='{{$event->nameResponsable}}' readonly>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="form-group responsavel">
                            <label for='phoneResponsable'>Telefone responsável</label>  

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input id='phoneResponsable' name='phoneResponsable' type="text" class="form-control" value='{{$event->phoneResponsable}}' readonly>
                            </div>
                        </div>

                    </div>  
                    <div class="col-md-4">

                        <div class="form-group responsavel">
                            <label for='value'>Valor</label>      

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-usd"></i>
                                </div>
                                <input id='value' name='value' type="text" class="form-control" value='{{$event->value}}' readonly>
                            </div>
                        </div>
                    
                    </div>
                </div>

                @endif

            </div>
        </div>   

    </div>
</div>

@if($event->haveInscription)

<div class="row">
    <div class="col-md-12">

        <h3><i class="fa fa-check-square-o" aria-hidden="true"></i> Inscritos</h3>
        <div class="box box-primary">
            <div class="box-header with-border form-inline text-right">
                @if($event->endDate > date('Y-m-d'))
                    <input class="form-control" id="btn-link-txt" value="{{ env('APP_URL').'/event/invite/'.$event->hash }}" readonly="">
                    <a href="#" id="btn-link" class="btn btn-default" title="Copiar o link para inscrição no evento"><i class="fa fa-link" aria-hidden="true"></i></a>
                @endif
                <a target="_blank" href="{{ url('church/inscription/pdf', $event->id) }}" class='btn btn-danger' title="Gerar PDF com todos os inscritos"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
                @if($event->endDate > date('Y-m-d'))
                    <a href="{{ url('church/inscription/add', $event->id) }}" class='btn btn-success' title="Cadastrar inscrição"><i class="fa fa-plus" aria-hidden="true"></i></a>
                @endif
            </div>
            <div class="box-body">

                <table class='table table-hover table-striped table-condensed' id='table'>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th class='hidden-xs'>Email</th>
                            <th class='hidden-xs'>Nascimento</th>
                            <th class='hidden-xs'>Telefone</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($inscriptions as $inscript)
                        <tr class='@if($inscript->isPaid) success @else warning @endif'>
                            <td style='vertical-align:middle'>{{ $inscript->name }}</td>
                            <td style='vertical-align:middle' class='hidden-xs'>{{ $inscript->email }}</td>
                            <td style='vertical-align:middle' class='hidden-xs'>{{ date('d/m/Y', strtotime($inscript->birth)) }}</td>
                            <td style='vertical-align:middle' class='hidden-xs'>{{ $inscript->phone }}</td>
                            <td style='vertical-align:middle'>
                                @if($inscript->isPaid) Pago @else Pendente @endif
                            </td>
                            <td style='vertical-align:middle' class='text-right'>
                                @if(!$inscript->isPaid)
                                <a href="{{url('church/inscription/report-payment', $inscript->id)}}" class='btn btn-warning' title="Informar pagamento"><i class="fa fa-usd" aria-hidden="true"></i></a>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td style='vertical-align:middle' colspan="200">Nenhum participante cadastrado!</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>

            </div>
        </div>   

    </div>
</div>


@endif



@endsection



@section('js')
<script>

  $(function() {

    $(document).ready(function () {
        $('#table').dataTable({
            "language": {
                "sEmptyTable":   "Nenhum registro encontrado",
                "sProcessing":   "A processar...",
                "sLengthMenu":   "Mostrar _MENU_ registos",
                "sZeroRecords":  "Não foram encontrados resultados",
                "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registos",
                "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registos",
                "sInfoFiltered": "(filtrado de _MAX_ registos no total)",
                "sInfoPostFix":  "",
                "sSearch":       "Procurar:",
                "sUrl":          "",
                "oPaginate": {
                    "sFirst":    "Primeiro",
                    "sPrevious": "Anterior",
                    "sNext":     "Seguinte",
                    "sLast":     "Último"
                },
                "oAria": {
                    "sSortAscending":  ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
                }
        });
    });

    $('#value').mask('#.##0,00', {reverse: true});

    $('#btn-link').click(function(){
            //Visto que o 'copy' copia o texto que estiver selecionado, talvez você queira colocar seu valor em um txt escondido
        
        $('#btn-link-txt').select();
        var ok = document.execCommand('copy');
        if (ok) { alert('Link copiado para a área de transferência'); }

    });

  });

</script>
@stop


