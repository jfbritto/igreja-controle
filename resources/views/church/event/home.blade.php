@extends('adminlte::page')

@section('title', 'Igreja Controle - Eventos')

@section('content_header')
    <h1><i class="fa fa-calendar" aria-hidden="true"></i> Eventos</h1>

    <ol class="breadcrumb">
    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('event')}}">Eventos</a></li>
    </ol>
@stop

@section('content')
    
    
<div class="messages">
    @include('includes.alerts')
</div>


<div class="row">

    <div class="col-md-3">

        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Criar evento</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ route('event.store') }}">
            @csrf
              <div class="box-body">

                <div class="form-group">
                    <label for='title'>Título</label>  

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-tag"></i>
                        </div>
                        <input id='title' name='title' type="text" class="form-control" required>
                    </div>
                </div>    

                <div class="form-group">
                    <label for='description'>Descrição</label> 

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-align-center"></i>
                        </div>
                        <textarea id='description' name='description' class="form-control"></textarea>
                    </div>
                </div>  

                <div class="form-group">
                    <label for='location'>Local</label>  

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <input id='location' name='location' type="text" class="form-control" value='{{ $church->name }}'>
                    </div>
                </div>

                <div class="form-group">
                    <label for='startDate'>Data inicial</label>  

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input id='startDate' name='startDate' type="date" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for='endDate'>Data final</label>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input id='endDate' name='endDate' type="date" class="form-control" required>
                    </div>
                </div>

                <label>Habilitar inscrições?</label> 
                <div class="checkbox">
                  <label for='radio-sim'>
                    <input id='radio-sim' type="radio" name="inscricoes" value="sim"> Sim
                  </label>
                </div>
                <div class="checkbox">
                  <label for='radio-nao'>
                    <input id='radio-nao' type="radio" name="inscricoes" value="nao" checked="checked"> Não
                  </label>
                </div>

                <div class="form-group responsavel" style="display:none">
                    <label for='nameResponsable'>Responsável</label> 

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input id='nameResponsable' name='nameResponsable' type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group responsavel" style="display:none">
                    <label for='phoneResponsable'>Telefone responsável</label>  

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input id='phoneResponsable' name='phoneResponsable' type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group responsavel" style="display:none">
                    <label for='value'>Valor</label>      

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-usd"></i>
                        </div>
                        <input id='value' name='value' type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for=''>Escolha a cor do card</label>                                    
                    <input id='color' name='color' type="color" class="form-control" value='#3c8dbc'>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Cadastrar</button>
              </div>
            </form>
          </div>

    </div>    
    <div class="col-md-9">

        <div class="box box-primary">
            <div class="box-body no-padding">
                {!! $calendar->calendar() !!}
                {!! $calendar->script() !!}
            </div>
        </div>

    </div>

</div>


<div class="row">

    <div class="col-md-12">

        <h3>Listagem</h3>
        <div class="box box-primary">
            <div class="box-body">
                <table class='table table-hover table-striped table-condensed' id='table'>
                    <thead>
                        <tr>
                            <th>Evento</th>
                            <th>Local</th>
                            <th>Periodo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($events as $event)
                        <tr>
                            <td style='vertical-align:middle'>{{ $event->title }}</td>
                            <td style='vertical-align:middle'>{{ $event->location }}</td>
                            <td style='vertical-align:middle'>{{ date('d/m/Y', strtotime($event->startDate)) }} à {{ date('d/m/Y', strtotime($event->endDate)) }}</td>
                            <td style='vertical-align:middle' class='text-right'>
                                <a href="{{ url('church/event/edit', $event->id) }}" class='btn btn-warning'><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp; Editar</a>
                                <a href="{{ url('church/event/destroy', $event->id) }}" class='btn btn-danger'><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Deletar</a>
                                <a href="{{ url('church/event/show', $event->id) }}" class='btn btn-primary'><i class="fa fa-eye" aria-hidden="true"></i>&nbsp; Visualizar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="200">Nenhum evento com inscrição cadastrado!</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

        </div>

    </div>    

</div>


@endsection


@section('js')
<script src="{{ asset('assets/fullcalendar-3.10.0/lib/moment.min.js') }}"></script>
<script src="{{ asset('assets/fullcalendar-3.10.0/fullcalendar.min.js') }}"></script>
<script src="{{ asset('assets/fullcalendar-3.10.0/locale/pt-br.js') }}"></script>


<link rel="stylesheet" href="{{ asset('assets/fullcalendar-3.10.0/fullcalendar.min.css') }} "/>

<script>

  $(function() {



    $("#radio-sim, #radio-nao").change(function () {

        if ($("#radio-sim").is(":checked")) {
            $('.responsavel').show();
        }
        else{
            $('.responsavel').hide();
        }
    });

    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };

    $('#phoneResponsable').mask(SPMaskBehavior, spOptions);

    $('#value').mask('#.##0,00', {reverse: true});

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

</script>
@stop

