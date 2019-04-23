<?php

namespace App\Http\Controllers\Support;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Support;
use App\Models\Parameter;

class SupportController extends Controller
{

    public function index()
    {
        $messages = Support::where('idChurch_fk', '=',auth()->user()->idChurch_fk)->join('parameters', 'parameters.id', '=', 'supports.type')->select('supports.*', 'parameters.value as type_name')->get();
        $types = Parameter::where('operation', '=', 'support')->where('attribute', '=', 'type')->get();

        return view('church.support.home', compact('messages', 'types'));
    }


    public function create()
    {

    }
    
    
    public function store(Request $request)
    {
        $request['idChurch_fk'] = auth()->user()->idChurch_fk;
        $request['idUser_fk'] = auth()->user()->id;

        $result = Support::create($request->all());
    
        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao enviar mensagem!');
        else
            return redirect()
                        ->route('support')
                        ->with('success', 'Mensagem enviada com sucesso! iremos respondê-la o quanto antes!'); 
        
    }


    public function show(Support $message)
    {

        if($message->idChurch_fk != auth()->user()->idChurch_fk) abort('401');

        $types = Parameter::where('operation', '=', 'support')->where('attribute', '=', 'type')->get();

        if(!$message)
            return redirect()
                        ->route('event')
                        ->with('error', 'Mensagem não encontrada!');

        return view('church.support.show', ['message' => $message, 'types' => $types]);
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









    public function admin_index()
    {
        $messages_open = Support::where('isOpen', '=', true)->get();

        $messages_close = Support::where('isOpen', '=', false)->get();

        return view('admin.support.home', ['messages_open' => $messages_open, 'messages_close' => $messages_close]);
    }

}
