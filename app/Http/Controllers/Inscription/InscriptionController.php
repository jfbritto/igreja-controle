<?php

namespace App\Http\Controllers\Inscription;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Church;
use App\Models\State;
use App\Models\City;
use App\Models\EventRegistration;

class InscriptionController extends Controller
{

    public function index()
    {   
        $events = Event::where('idChurch_fk', '=', auth()->user()->idChurch_fk)->where('isActive', '=', true)->where('haveInscription', '=', true)->get();
        $church = Church::find(auth()->user()->idChurch_fk);


        return view('church.inscription.home', compact('events', 'church'));
    }

    public function create($id)
    {   
        $event = Event::where('id', '=', $id)->where('idChurch_fk', '=', auth()->user()->idChurch_fk)->where('haveInscription', '=', true)->get()->first();
        $church = Church::find(auth()->user()->idChurch_fk);
        $states = State::get();


        if(!$event)
            return redirect()
                        ->route('inscription')
                        ->with('error', 'Evento não encontrado!');

        return view('church.inscription.create', compact('church', 'states', 'event'));
    }

    public function store(Request $request, $id)
    {
        $event = Event::where('id', '=', $id)->where('idChurch_fk', '=', auth()->user()->idChurch_fk)->where('haveInscription', '=', true)->get()->first();
        $church = Church::find(auth()->user()->idChurch_fk);

        if(!$event)
            return redirect()
                        ->route('inscription')
                        ->with('error', 'Evento não encontrado!');
        
        $request['idEvent_fk'] = $event->id;
        $request['idChurch_fk'] = auth()->user()->idChurch_fk;

        $result = EventRegistration::create($request->all()); 
        
        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao cadastrar inscrição!');
        else
            return redirect()
                        ->route('event.show', $event->id)
                        ->with('success', 'Inscrição efetuada com sucesso!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function report_payment($id)
    {
        $inscript = EventRegistration::find($id);

        if(!$inscript)
            return redirect()
                        ->route('event')
                        ->with('error', 'Inscrito não encontrado!');

        $church = Church::find($inscript->idChurch_fk);

        if(!$church)
            return redirect()
                        ->route('event')
                        ->with('error', 'Igreja não encontrada!');

        $event = Event::find($inscript->idEvent_fk);

        if(!$event)
            return redirect()
                        ->route('event')
                        ->with('error', 'Evento não encontrado!');                


        if( ($inscript->idChurch_fk != $event->idChurch_fk) or ($inscript->idChurch_fk != auth()->user()->idChurch_fk) or ($event->idChurch_fk != auth()->user()->idChurch_fk) )
            return redirect()
                        ->route('event')
                        ->with('error', 'Evento não encontrado!'); 

        $updates = ['isPaid' => true]; 
        $result = $inscript->update($updates);

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao informar o pagamento!');
        else
            return redirect()
                        ->route('event.show', $event->id)
                        ->with('success', 'Pagamento informado com sucesso!'); 
    }

    //PDF

    public function inscription_pdf($id)
    {
        $event = Event::find($id);

        if(!$event)
            return redirect()
                        ->route('event')
                        ->with('error', 'Evento não encontrado!'); 

        $inscripts = EventRegistration::where('idEvent_fk', '=', $event->id)->where('idChurch_fk', '=', auth()->user()->idChurch_fk)->get();
    
        return \PDF::loadView('church.inscription.pdf.inscriptions', compact('inscripts'))->setPaper('a4', 'landscape')->stream();
    }
}
