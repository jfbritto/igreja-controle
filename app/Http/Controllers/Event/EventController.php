<?php

namespace App\Http\Controllers\Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use App\Models\Event;
use App\Models\Church;
use App\Models\EventRegistration;

class EventController extends Controller
{

    public function index()
    {
        $events_array = [];
        $events = Event::where('idChurch_fk', '=', auth()->user()->idChurch_fk)->where('isActive', '=', true)->where('isDeleted', '=', false)->get();

        if($events->count()) {
            foreach ($events as $key => $value) {
                $events_array[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->startDate),
                    new \DateTime($value->endDate.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => $value->color,
                        'url' => 'event/show/'.$value->id,
                    ]
                );
            }
        }

        $calendar = Calendar::addEvents($events_array);
        $church = Church::find(auth()->user()->idChurch_fk);

        return view('church.event.home', compact('calendar', 'church', 'events'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        if($request->inscricoes == 'sim'){
            $request['haveInscription'] = true;
        }else{
            $request['haveInscription'] = false;
        }

        if(isset($request->value)){
            $request['value'] = str_replace('.', '', $request->value);
            $request['value'] = str_replace(',', '.', $request['value']);
        }


        $request['idChurch_fk'] = auth()->user()->idChurch_fk;
        
        $event = $request->all();
        
        $result = Event::create($event);

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao cadastrar evento!');
        else
            return redirect()
                        ->route('event')
                        ->with('success', 'Evento cadastrado com sucesso!');
    }


    public function show($id)
    {
        $event = Event::find($id);

        if(!$event)
            return redirect()
                        ->route('event')
                        ->with('error', 'Evento não encontrado!');

        $church = Church::find($event->idChurch_fk);

        if(!$church)
            return redirect()
                        ->route('event')
                        ->with('error', 'Igreja não encontrada!');                

        if($church->id != auth()->user()->idChurch_fk)
            return redirect()
                        ->route('event')
                        ->with('error', 'Evento não encontrado!');  

        $inscriptions = EventRegistration::where('idChurch_fk', '=', $church->id)->where('idEvent_fk', '=', $event->id)->get();

        return view('church.event.show', compact('event', 'inscriptions'));
    }


    public function edit($id)
    {
        $event = Event::find($id);

        if(!$event)
            return redirect()
                        ->route('event')
                        ->with('error', 'Evento não encontrado!');

        $church = Church::find($event->idChurch_fk);

        if(!$church)
            return redirect()
                        ->route('event')
                        ->with('error', 'Igreja não encontrada!');                

        if($church->id != auth()->user()->idChurch_fk)
            return redirect()
                        ->route('event')
                        ->with('error', 'Evento não encontrado!');  

        return view('church.event.edit', compact('event'));
    }


    public function update(Request $request, $id)
    {
        $event = Event::find($id);

        if(!$event)
            return redirect()
                        ->route('event')
                        ->with('error', 'Evento não encontrado!');

        $church = Church::find($event->idChurch_fk);

        if(!$church)
            return redirect()
                        ->route('event')
                        ->with('error', 'Igreja não encontrada!');                

        if($church->id != auth()->user()->idChurch_fk)
            return redirect()
                        ->route('event')
                        ->with('error', 'Evento não encontrado!'); 

        $request['value'] = str_replace('.', '', $request->value);
        $request['value'] = str_replace(',', '.', $request['value']);

        $result = $event->update($request->all());

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao editar evento!');
        else
            return redirect()
                        ->route('event.show', $event->id)
                        ->with('success', 'Evento editado com sucesso!'); 

    }

    public function destroy($id)
    {
        $event = Event::find($id);

        if(!$event)
            return redirect()
                        ->route('event')
                        ->with('error', 'Evento não encontrado!');

        $church = Church::find($event->idChurch_fk);

        if(!$church)
            return redirect()
                        ->route('event')
                        ->with('error', 'Igreja não encontrada!');                

        if($church->id != auth()->user()->idChurch_fk)
            return redirect()
                        ->route('event')
                        ->with('error', 'Evento não encontrado!'); 

        $updates = ['isActive' => false, 'isDeleted' => true];                     
        $result = $event->update($updates);

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao deletar evento!');
        else
            return redirect()
                        ->route('event')
                        ->with('success', 'Evento deletado com sucesso!');                
    }




}
