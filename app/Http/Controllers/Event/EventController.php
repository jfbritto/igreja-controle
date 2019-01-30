<?php

namespace App\Http\Controllers\Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use App\Models\Event;
use App\Models\Church;

class EventController extends Controller
{

    public function index()
    {
        $events = [];
        $data = Event::where('idChurch_fk', '=', auth()->user()->idChurch_fk)->get();

        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
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

        $calendar = Calendar::addEvents($events);
        $church = Church::find(auth()->user()->idChurch_fk);

        return view('church.event.home', compact('calendar', 'church'));
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

        return view('church.event.show', compact('event'));
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
}
