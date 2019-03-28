<?php

namespace App\Http\Controllers\Member;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\State;
use App\Models\City;
use App\Models\Address;
use App\Models\Church;

class MemberController extends Controller
{

    public function index()
    {
        $members = User::where('idChurch_fk', '=', auth()->user()->idChurch_fk)
                            ->where('isMember', '=', true)
                            ->where('isDeleted', '=', false)
                            ->get();

        $church = Church::where('id', auth()->user()->idChurch_fk)->first();                    

        return view('church.member.home', compact('members', 'church'));
    }

    public function create()
    {
        $states = State::get();

        return view('church.member.create', compact('states'));
    }

    public function store(Request $request)
    {
        
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
        
        $request_user = [
            'name'          => $request->name,
            'email'         => $request->email,
            'birth'         => $request->birth,
            'cpf'           => $request->cpf,
            'sex'           => $request->sex,
            'phone'         => $request->phone,
            'idChurch_fk'   => auth()->user()->idChurch_fk,
            'isMember'      => true,
            'idAddress_fk'  => $address->id
        ];


        $result = User::create($request_user);

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao cadastrar membro!');
        else
            return redirect()
                        ->route('member')
                        ->with('success', 'Membro cadastrado com sucesso!');
    }

    public function show($id)
    {
        $member = User::where('id', '=', $id)
                            ->where('idChurch_fk', '=', auth()->user()->idChurch_fk)
                            ->get()
                            ->first();
        
        if(!$member)
            return redirect()
                        ->route('member')
                        ->with('error', 'Membro não encontrado!');

        $address = Address::find($member->idAddress_fk);
        $states = State::get();
        $cities = City::where('idEstado', '=', $address->idState_fk)->get();

        return view('church.member.show', compact('member', 'states', 'cities', 'address'));
    }

    public function edit($id)
    {

        $member = User::where('id', '=', $id)
                            ->where('idChurch_fk', '=', auth()->user()->idChurch_fk)
                            ->where('isActive', '=', true)
                            ->get()
                            ->first();
        
        if(!$member)
            return redirect()
                        ->route('member')
                        ->with('error', 'Membro não encontrado!');

        if(!$member->idAddress_fk)
            return redirect()
                        ->route('member')
                        ->with('error', 'Endereço do membro não encontrado!');

        $address = Address::find($member->idAddress_fk);


        $states = State::get();
        $cities = City::where('idEstado', '=', $address->idState_fk)->get();

        return view('church.member.edit', compact('member', 'states', 'cities', 'address'));
    }

    public function update(Request $request, $id)
    {
        $member = User::where('id', '=', $id)
                            ->where('idChurch_fk', '=', auth()->user()->idChurch_fk)
                            ->where('isActive', '=', true)
                            ->get()
                            ->first();
        
        $address = Address::find($member->idAddress_fk);
    
        if(!$member)
            return redirect()
                    ->route('member')
                    ->with('error', 'Membro não encontrado!');

        if(!$address)
            return redirect()
                    ->route('member')
                    ->with('error', 'Endereço não encontrado!');        
        
        $request['avatar'] = $member->avatar;
        if ( $request->hasfile('avatar') && $request->file('avatar')->isValid() ) {
            
            if ($member->avatar) 
                $name = $member->avatar;
            else
                $name = $member->id.kebab_case($member->name).".".$request->avatar->extension();

            //$extension = $request->avatar->extension();
            $nameFile = $name;

            $request['avatar'] = $nameFile;

            //Storage::delete("members/{$member->avatar}");    

            $upload = $request->avatar->storeAs('members', $nameFile);
            
            if(!$upload)
                return redirect()
                        ->back()
                        ->with('error', 'Falha ao fazer upload da imagem!');

        }

        $request_address = [
            'cep'           => $request->cep,
            'idState_fk'    => $request->idState_fk,
            'idCity_fk'     => $request->idCity_fk,
            'address'       => $request->address,
            'number'        => $request->number,
            'neighborhood'  => $request->neighborhood,
            'complement'    => $request->complement,
        ];
        
        $request_user = [
            'name'          => $request->name,
            'email'         => $request->email,
            'birth'         => $request->birth,
            'cpf'           => $request->cpf,
            'sex'           => $request->sex,
            'phone'         => $request->phone,
            'avatar'        => $nameFile,
        ];



        $result = $address->update($request_address);

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao editado endereço!');

        $result2 = $member->update($request_user);  
        
        if(!$result2)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao editar o membro!');
        else
            return redirect()
                        ->route('member')
                        ->with('success', 'Membro editado com sucesso!');
    }

    public function destroy($id)
    {
        $member = User::where('id', '=', $id)
                            ->where('idChurch_fk', '=', auth()->user()->idChurch_fk)
                            ->get()
                            ->first();
        
        if(!$member)
            return redirect()
                        ->route('member')
                        ->with('error', 'Membro não encontrado!');

        $updates = ['isActive' => false, 'isDeleted' => true];                    
        $result = $member->update($updates);

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao deletar membro!');
        else
            return redirect()
                        ->route('member')
                        ->with('success', 'Membro deletado com sucesso!');

    }

    public function inactivate($id)
    {
        $member = User::where('id', '=', $id)
                            ->where('idChurch_fk', '=', auth()->user()->idChurch_fk)
                            ->get() 
                            ->first();
        
        if(!$member)
            return redirect()
                        ->route('member')
                        ->with('error', 'Membro não encontrado!');

        $updates = ['isActive' => false];                    
        $result = $member->update($updates);

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao desativar membro!');
        else
            return redirect()
                        ->route('member')
                        ->with('success', 'Membro desativado com sucesso!');
    }

    public function activate($id)
    {
        $member = User::where('id', '=', $id)
                            ->where('idChurch_fk', '=', auth()->user()->idChurch_fk)
                            ->get()
                            ->first();
        
        if(!$member)
            return redirect()
                        ->route('member')
                        ->with('error', 'Membro não encontrado!');

        $updates = ['isActive' => true];                    
        $result = $member->update($updates);

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao ativar membro!');
        else
            return redirect()
                        ->route('member')
                        ->with('success', 'Membro ativado com sucesso!');
    }


    public function validate_member($id)
    {
        $member = User::where('id', '=', $id)
                            ->where('idChurch_fk', '=', auth()->user()->idChurch_fk)
                            ->get()
                            ->first();
        
        if(!$member)
            return redirect()
                        ->route('member')
                        ->with('error', 'Membro não encontrado!');

        $updates = ['isActive' => true, 'isPendent' => false];                    
        $result = $member->update($updates);

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao validar membro!');
        else
            return redirect()
                        ->route('member')
                        ->with('success', 'Membro validado com sucesso!');
    }


    //BIRTHDAY

    public function birth()
    {
        $month = date('m');

        $date_month = $month;

        $members = User::whereMonth('birth', $month)
                                    ->where('idChurch_fk', '=', auth()->user()->idChurch_fk)
                                    ->where('isMember', '=', true)
                                    ->where('isActive', '=', true)
                                    ->where('isDeleted', '=', false)
                                    ->get();

        return view('church.birth.home', compact('members', 'date_month'));
    }

    public function birth_month(Request $request)
    {
        if (!isset($request->month)) {
            $request->month = date('m');
        }

        $date_month = $request->month;

        $members = User::whereMonth('birth', $request->month)
                                    ->where('idChurch_fk', '=', auth()->user()->idChurch_fk)
                                    ->where('isMember', '=', true)
                                    ->where('isActive', '=', true)
                                    ->where('isDeleted', '=', false)
                                    ->get();

        return view('church.birth.home', compact('members', 'date_month'));
    }

    




    //PDF

    public function member_pdf()
    {
  
        $members = User::where('idChurch_fk', '=', auth()->user()->idChurch_fk)
                                ->where('isMember', '=', true)
                                ->where('isActive', '=', true)
                                ->where('isDeleted', '=', false)
                                ->get();
    
        return \PDF::loadView('church.member.pdf.members', compact('members'))->setPaper('a4', 'landscape')->stream();
    }

    public function birth_pdf($month)
    {
  
        $members = User::whereMonth('birth', $month)
                                ->where('idChurch_fk', '=', auth()->user()->idChurch_fk)
                                ->where('isMember', '=', true)
                                ->where('isActive', '=', true)
                                ->where('isDeleted', '=', false)
                                ->get();
    
        return \PDF::loadView('church.birth.pdf.birthdays', compact('members'))->stream();
    }















    public function invite_create($hash)
    {
        $church = Church::where('hash', $hash)->first();

        $states = State::get();

        return view('church.member.invite.create', compact('hash', 'church', 'states'));
    }

    public function invite_store(Request $request, $hash)
    {
        
        // $validator = validator($request, [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'complement' => 'nullable'
        // ]);

        // if($validator->fails())

        $church = Church::where('hash', $hash)->first();

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
        
        $request_user = [
            'name'          => $request->name,
            'email'         => $request->email,
            'birth'         => $request->birth,
            'cpf'           => $request->cpf,
            'sex'           => $request->sex,
            'phone'         => $request->phone,
            'idChurch_fk'   => $church->id,
            'isMember'      => true,
            'idAddress_fk'  => $address->id,
            'isActive'      => false,
            'isPendent'     => true
        ];


        $result = User::create($request_user);

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao cadastrar membro!');
        else
            return redirect()
                        ->back()
                        ->with('success', 'Membro cadastrado com sucesso!');
    }
}

