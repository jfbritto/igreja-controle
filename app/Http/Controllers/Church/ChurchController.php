<?php

namespace App\Http\Controllers\Church;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Church;
use App\Models\State;
use App\Models\Address;
use App\Models\City;

class ChurchController extends Controller
{
    public function index()
    {
        $churches = Church::where('isDeleted', false)->get();

        return view('admin.church.home', compact('churches'));
    }

    public function create(){

        $states = State::get();

        return view('admin.church.create', compact('states'));
    }

    public function store(Request $request){
        
        $request_address = [
            'cep'           => $request->cep,
            'idState_fk'    => $request->idState_fk,
            'idCity_fk'     => $request->idCity_fk,
            'address'       => $request->address,
            'number'        => $request->number,
            'neighborhood'  => $request->neighborhood,
            'complement'    => $request->complement,
        ];

        $address = Address::create($request_address);
        
        $request_church = [
            'name'          => $request->name,
            'email'         => $request->email,
            'cnpj'           => $request->cnpj,
            'phone'         => $request->phone,
            'idAddress_fk'  => $address->id
        ];


        $result = Church::create($request_church);

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao cadastrar igreja!');
        else
            return redirect()
                        ->route('church')
                        ->with('success', 'Igreja cadastrada com sucesso!');
    }

    public function show($id){

        $church = Church::find($id);

        $states = State::get();

        $cities = City::where('idEstado', '=', $church->address->idState_fk)->get();

        return view('admin.church.show', compact('church', 'states', 'cities'));
    }

    public function edit($id){

        $church = Church::find($id);

        $states = State::get();

        $cities = City::where('idEstado', '=', $church->address->idState_fk)->get();

        return view('admin.church.edit', compact('church', 'states', 'cities'));
    }

    public function update(Request $request, $id){
        
        $church = Church::find($id);

        $request_address = [
            'cep'           => $request->cep,
            'idState_fk'    => $request->idState_fk,
            'idCity_fk'     => $request->idCity_fk,
            'address'       => $request->address,
            'number'        => $request->number,
            'neighborhood'  => $request->neighborhood,
            'complement'    => $request->complement,
        ];

        
        $request_church = [
            'name'          => $request->name,
            'email'         => $request->email,
            'cnpj'           => $request->cnpj,
            'phone'         => $request->phone
        ];

        $result = $church->address->update($request_address);

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao editar endereço!');

        $result2 = $church->update($request_church); 
        
        if(!$result2)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao editar igreja!');
        else
            return redirect()
                        ->route('church')
                        ->with('success', 'Igreja editada com sucesso!');

    }


    public function destroy($id){

        $church = Church::find($id);

        if(!$church)
            return redirect()
                        ->back()
                        ->with('error', 'Igreja não encontrada!');

        $updates = ['isActive' => false, 'isDeleted' => true];                    
        $result = $church->update($updates);

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao deletar igreja!');
        else
            return redirect()
                        ->route('church')
                        ->with('success', 'Igreja deletada com sucesso!');

    }

    public function inactivate($id){

        $church = Church::find($id);

        if(!$church)
            return redirect()
                        ->back()
                        ->with('error', 'Igreja não encontrada!');

        $updates = ['isActive' => false];                    
        $result = $church->update($updates);

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao desativar igreja!');
        else
            return redirect()
                        ->route('church')
                        ->with('success', 'Igreja desativada com sucesso!');
    }

    public function activate($id){

        $church = Church::find($id);

        if(!$church)
            return redirect()
                        ->back()
                        ->with('error', 'Igreja não encontrada!');

        $updates = ['isActive' => true];                    
        $result = $church->update($updates);

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao ativar igreja!');
        else
            return redirect()
                        ->route('church')
                        ->with('success', 'Igreja ativada com sucesso!');

    }

    public function Church_pdf(){

        $churches = Church::where('isDeleted', false)->get();
    
        return \PDF::loadView('admin.church.pdf.churches', compact('churches'))->setPaper('a4', 'landscape')->stream();
    }










    public function config()
    {
        $church = Church::find(auth()->user()->idChurch_fk);

        return view('church.config.home', compact('church'));
    }

    public function update_avatar(Request $request)
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
