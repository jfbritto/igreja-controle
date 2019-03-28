<?php

namespace App\Http\Controllers\Church;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Church;

class ChurchController extends Controller
{
    public function index()
    {
        return view('church.home');
    }

    public function config()
    {
    	$church = Church::find(auth()->user()->idChurch_fk);

        return view('church.config.home', compact('church'));
    }

    public function update(Request $request)
    {
    	$church = Church::find(auth()->user()->idChurch_fk);

    	$request['avatar'] = $church->avatar;
        if ( $request->hasfile('avatar') && $request->file('avatar')->isValid() ) {
            
            if ($church->avatar) 
                $name = $church->avatar;
            else
                $name = $church->id.kebab_case($church->name).".".$request->avatar->extension();

            //$extension = $request->avatar->extension();
            $nameFile = $name;

            $request['avatar'] = $nameFile;

            //Storage::delete("members/{$member->avatar}");    

            $upload = $request->avatar->storeAs('churches', $nameFile);
            
            if(!$upload)
                return redirect()
                        ->back()
                        ->with('error', 'Falha ao fazer upload da imagem!');

        }

        $request_church = [
            'avater' => $request->avatar,
        ];

        $result = $church->update($request_church);

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao editar igreja!');
        else
            return redirect()
                        ->route('config')
                        ->with('success', 'Igreja editada com sucesso!');


    }

}
