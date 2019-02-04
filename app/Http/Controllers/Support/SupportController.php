<?php

namespace App\Http\Controllers\Support;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Support;

class SupportController extends Controller
{

    public function index()
    {
        $messages = Support::where('idChurch_fk', '=',auth()->user()->idChurch_fk)->get();

        return view('church.support.home', compact('messages'));
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


    public function show($id)
    {
        $message = Support::where('idChurch_fk', '=',auth()->user()->idChurch_fk)->where('id', '=', $id)->get()->first();

        if(!$message)
            return redirect()
                        ->route('event')
                        ->with('error', 'Mensagem não encontrada!');

        return view('church.support.show', compact('message'));
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
