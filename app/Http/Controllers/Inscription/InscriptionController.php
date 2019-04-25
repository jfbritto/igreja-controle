<?php

namespace App\Http\Controllers\Inscription;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Church;
use App\Models\State;
use App\Models\City;
use App\Models\EventRegistration;
use Carbon\Carbon;
use DB;
use Exception;

class InscriptionController extends Controller
{

    public function index()
    {   
        $past_events = Event::where('idChurch_fk', '=', auth()->user()->idChurch_fk)->where('isActive', '=', true)->where('haveInscription', '=', true)->where('endDate', '<', now())->get();
        $future_events = Event::where('idChurch_fk', '=', auth()->user()->idChurch_fk)->where('isActive', '=', true)->where('haveInscription', '=', true)->where('endDate', '>', now())->get();
        $church = Church::find(auth()->user()->idChurch_fk);
    
        return view('church.inscription.home', ['past_events' => $past_events, 'future_events' => $future_events, 'church' => $church]);
    }

    public function create(Event $event)
    {   
        if($event->church->id != auth()->user()->idChurch_fk) abort('401');

        if($event->haveInscription != true) abort('401');

        $states = State::get();

        return view('church.inscription.create', ['states' => $states, 'event' => $event]);
    }

    public function store(Request $request, Event $event)
    {

        if($event->church->id != auth()->user()->idChurch_fk) abort('401');

        if($event->haveInscription != true) abort('401');
        
        $request['idEvent_fk'] = $event->id;
        $request['idChurch_fk'] = auth()->user()->idChurch_fk;


        $result = null;

        DB::beginTransaction();
        try{

            $result = EventRegistration::create($request->all()); 

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
        }

        
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


    public function report_info_payment(EventRegistration $inscription)
    {         

        return view('church.inscription.report_payment', ['inscription' => $inscription]);                
    }

    public function report_payment(Request $request, EventRegistration $inscription)
    {

        if( ($inscription->idChurch_fk != $inscription->event->idChurch_fk) or ($inscription->idChurch_fk != auth()->user()->idChurch_fk) or ($inscription->event->idChurch_fk != auth()->user()->idChurch_fk) )
            return redirect()
                        ->route('event')
                        ->with('error', 'Evento não encontrado!'); 

        $updates = ['isPaid' => true, 'info' => $request->info]; 

        $result = null;

        DB::beginTransaction();
        try{

            $result = $inscription->update($updates);

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
        }


        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao informar o pagamento!');
        else
            return redirect()
                        ->route('event.show', $inscription->event->id)
                        ->with('success', 'Pagamento informado com sucesso!'); 
    }

    //PDF

    public function inscription_pdf(Event $event)
    {
        $inscriptions = $event->inscriptions()->where('idChurch_fk', '=', auth()->user()->idChurch_fk)->get();
    
        return \PDF::loadView('church.inscription.pdf.inscriptions', ['inscripts' => $inscriptions])->setPaper('a4', 'landscape')->stream();
    }



    public function create_invite($hash)
    {
        $event = Event::where('hash', $hash)->first();

        if(!$event) abort('404');

        $church = $event->church;

        $states = State::get();

        return view('church.inscription.invite.create', compact('hash', 'church', 'states', 'event'));
    }

    public function store_invite(Request $request, $hash)
    {
        $event = Event::where('hash', $hash)->first();
        
        if(!$event) abort('404');

        $verify_exists = EventRegistration::where('email', $request->email)
                                                                ->where('idChurch_fk', $event->idChurch_fk)
                                                                ->where('idEvent_fk', $event->id)
                                                                ->where('isDeleted', false)
                                                                ->count();                

        if($verify_exists)
            return redirect()
                        ->back()
                        ->withInput()
                        ->with('error', 'Email já está cadastrado para este evento!');
        
        
        $request['idEvent_fk'] = $event->id;
        $request['idChurch_fk'] = $event->church->id;

        $result = EventRegistration::create($request->all()); 
        

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro na inscrição!');
        else
            return redirect()
                        ->route('inscription.invite.success', $hash)
                        ->with('success', 'Participante cadastrado com sucesso!');
    }

    public function success_invite($hash)
    {
        // dd($hash);
        $event = Event::where('hash', $hash)->first();
        // if(!$event) abort('404');

        return view('church.inscription.invite.success', ['event' => $event]);
    }


}
