<?php

namespace App\Http\Controllers\Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use App\Models\Event;
use App\Models\Church;
use App\Models\EventRegistration;
use DB;
use Exception;

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

        $events_active = Event::where('idChurch_fk', '=', auth()->user()->idChurch_fk)
                                        ->where('isActive', '=', true)
                                        ->where('isDeleted', '=', false)
                                        ->where('endDate', '>', now())
                                        ->get();

        $calendar = Calendar::addEvents($events_array);
        $church = Church::find(auth()->user()->idChurch_fk);

        return view('church.event.home', compact('calendar', 'church', 'events', 'events_active'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {


        $validator = validator($request->all(), [
            'title'             => 'required',
            'description'       => 'required',
            'location'          => 'required',
            'startDate'         => 'required | date',
            'endDate'           => 'required | date',
            'nameResponsable'   => 'nullable',
            'phoneResponsable'  => 'nullable | max:15',
            'value'             => 'nullable',
        ], [] , [
                    'title' => 'título', 
                    'description' => 'descrição',
                    'location' => 'local',
                    'startDate' => 'data inicial',
                    'endDate' => 'data final',
                    'nameResponsable' => 'nome responsável', 
                    'phoneResponsable' => 'telefone responsavel', 
                    'value' => 'valor'
                ]);

        if($validator->fails())
            return redirect()
                        ->back()
                        ->witherrors($validator->errors())
                        ->withInput();


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

        $result = null;

        
        DB::beginTransaction();
        try{

            $result = Event::create($event);

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
        }

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao cadastrar evento!');
        else
            return redirect()
                        ->route('event')
                        ->with('success', 'Evento cadastrado com sucesso!');
    }


    public function show(Event $event)
    {             

        if($event->church->id != auth()->user()->idChurch_fk) abort('401');

        if($event->isDeleted == true) abort('401');

        return view('church.event.show', ['event' => $event]);
    }


    public function edit(Event $event)
    {

        if($event->church->id != auth()->user()->idChurch_fk) abort('401');

        if($event->isDeleted == true) abort('401');

        return view('church.event.edit', compact('event'));
    }


    public function update(Request $request, Event $event)
    {

        if($event->church->id != auth()->user()->idChurch_fk) abort('401');

        $validator = validator($request->all(), [
            'title'             => 'required',
            'description'       => 'required',
            'location'          => 'required',
            'startDate'         => 'required | date',
            'endDate'           => 'required | date',
            'nameResponsable'   => 'nullable',
            'phoneResponsable'  => 'nullable | max:15',
            'value'             => 'nullable',
        ], [] , [
                    'title' => 'título', 
                    'description' => 'descrição',
                    'location' => 'local',
                    'startDate' => 'data inicial',
                    'endDate' => 'data final',
                    'nameResponsable' => 'nome responsável', 
                    'phoneResponsable' => 'telefone responsavel', 
                    'value' => 'valor'
                ]);

        if($validator->fails())
            return redirect()
                        ->back()
                        ->witherrors($validator->errors())
                        ->withInput();


        $request['value'] = str_replace('.', '', $request->value);
        $request['value'] = str_replace(',', '.', $request['value']);

        $result = null;

        DB::beginTransaction();
        try{

            $result = $event->update($request->all());

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
        }


        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao editar evento!');
        else
            return redirect()
                        ->route('event.show', $event->id)
                        ->with('success', 'Evento editado com sucesso!'); 

    }

    public function destroy(Event $event)
    {

        if($event->church->id != auth()->user()->idChurch_fk) abort('401');

        $updates = ['isActive' => false, 'isDeleted' => true];                     
        
        $result = null;

        DB::beginTransaction();
        try{

            $result = $event->update($updates);

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
        }


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
