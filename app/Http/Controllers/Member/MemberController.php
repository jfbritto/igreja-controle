<?php

namespace App\Http\Controllers\Member;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\State;
use App\Models\City;
use App\Models\Address;
use App\Models\Church;
use Arisharyanto\Laracrop\Laracrop;
use DB;
use Exception;

class MemberController extends Controller
{

    public function index()
    {
        $members = User::where('idChurch_fk', '=', auth()->user()->idChurch_fk)
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

        $validator = validator($request->all(), [
            'name'          => 'required',
            'email'         => 'required | email',
            'birth'         => 'required | date',
            'cpf'           => 'required | max:14',
            'sex'           => 'required',
            'phone'         => 'required',
            'info'          => 'nullable',
            'avatar'        => 'nullable | file | mimes:jpg,png,jpeg,bmp | max:3072',

            'cep'           => 'required | max:9',
            'idState_fk'    => 'required | exists:states,id',
            'idCity_fk'     => 'required | exists:cities,id',
            'address'       => 'required',
            'number'        => 'nullable',
            'neighborhood'  => 'nullable',
            'complement'    => 'nullable',
        ], [] , [
                    'name' => 'nome', 
                    'birth' => 'nascimento',
                    'sex' => 'sexo',
                    'phone' => 'telefone',
                    'info' => 'informações adicionais',
                    'idState_fk' => 'estado', 
                    'idCity_fk' => 'cidade', 
                    'address' => 'endereço',
                    'number' => 'número',
                    'neighborhood' => 'bairro',
                    'complement' => 'complemento',
                ]);

        if($validator->fails())
            return redirect()
                        ->back()
                        ->witherrors($validator->errors())
                        ->withInput();

        $result = null;

        DB::beginTransaction();
        try{

            $nameFile = null;
            if ( $request->hasfile('avatar') && $request->file('avatar')->isValid() ) {
                $nameFile = Laracrop::cropImage($request->input('avatar'));
                File::move(public_path("filetmp/{$nameFile}"), storage_path("app/public/members/{$nameFile}"));
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

            $address = Address::create($request_address);

            $request_user = [
                'name'          => $request->name,
                'email'         => $request->email,
                'birth'         => $request->birth,
                'cpf'           => $request->cpf,
                'sex'           => $request->sex,
                'phone'         => $request->phone,
                'info'          => $request->info,
                'avatar'        => $nameFile,
                'idChurch_fk'   => auth()->user()->idChurch_fk,
                'isMember'      => true,
                'idAddress_fk'  => $address->id
            ];


            $result = User::create($request_user);

            Laracrop::cleanCropTemp();

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
            abort('500');
        }

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

        $nameFile = $member->avatar;
        if ( $request->hasfile('avatar') && $request->file('avatar')->isValid() ) {
            $nameFile = Laracrop::cropImage($request->input('avatar'));

            Storage::delete("members/{$member->avatar}");

            File::move(public_path("filetmp/{$nameFile}"), storage_path("app/public/members/{$nameFile}"));

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
            'info'          => $request->info,
        ];



        $result = $address->update($request_address);

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao editar endereço!');


        $result2 = $member->update($request_user);

        Laracrop::cleanCropTemp();

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










    public function create_admin($id)
    {
        $church = Church::find($id);

        $states = State::get();

        return view('admin.church.user.create', compact('states', 'church'));
    }


    public function store_admin(Request $request)
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
            'idChurch_fk'   => $request->id_church,
            'isMember'      => false,
            'idAddress_fk'  => $address->id
        ];


        $result = User::create($request_user);



        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao cadastrar usuário!');
        else
            return redirect()
                            ->route('church.show', $request->id_church)
                            ->with('success', 'Usuário cadastrado com sucesso!');


    }



    public function show_admin($id_user)
    {
        $user = User::find($id_user);

        $address = Address::find($user->idAddress_fk);
        $states = State::get();
        $cities = City::where('idEstado', '=', $address->idState_fk)->get();

        return view('admin.church.user.show', compact('user', 'states', 'cities', 'address'));
    }



    public function edit_admin($id_user)
    {

        $user = User::find($id_user);

        $address = Address::find($user->idAddress_fk);


        $states = State::get();
        $cities = City::where('idEstado', '=', $address->idState_fk)->get();

        return view('admin.church.user.edit', compact('user', 'states', 'cities', 'address'));
    }

    public function update_admin(Request $request, $id_user)
    {
        $user = User::find($id_user);

        $address = Address::find($user->idAddress_fk);

        $nameFile = $user->avatar;
        if ( $request->hasfile('avatar') && $request->file('avatar')->isValid() ) {

            $nameFile = $user->id.kebab_case($user->name).".".$request->avatar->extension();;

            Storage::delete("members/{$user->avatar}");

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
                        ->with('error', 'Erro ao editar endereço!');

        $result2 = $user->update($request_user);

        if(!$result2)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao editar o usuário!');
        else
            return redirect()
                        ->route('church.show', $request->id_church)
                        ->with('success', 'Usuário editado com sucesso!');
    }



    public function inactivate_admin($id_user)
    {
        $user = User::find($id_user);

        $updates = ['isActive' => false];
        $result = $user->update($updates);

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao desativar usuário!');
        else
            return redirect()
                        ->route('church.show', $user->church->id)
                        ->with('success', 'Usuário desativado com sucesso!');
    }

    public function activate_admin($id_user)
    {
        $user = User::find($id_user);

        $updates = ['isActive' => true];
        $result = $user->update($updates);

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao ativar usuário!');
        else
            return redirect()
                        ->route('church.show', $user->church->id)
                        ->with('success', 'Usuário ativado com sucesso!');
    }


    public function destroy_admin($id_user)
    {
        $user = User::find($id_user);

        $updates = ['isActive' => false, 'isDeleted' => true];
        $result = $user->update($updates);

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao deletar usuário!');
        else
            return redirect()
                        ->route('church.show', $user->church->id)
                        ->with('success', 'Usuário deletado com sucesso!');
    }

















    //BIRTHDAY

    public function birth()
    {
        $month = date('m');

        $date_month = $month;

        $members = User::whereMonth('birth', $month)
                                    ->where('idChurch_fk', '=', auth()->user()->idChurch_fk)
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
                                    ->where('isActive', '=', true)
                                    ->where('isDeleted', '=', false)
                                    ->get();

        return view('church.birth.home', compact('members', 'date_month'));
    }






    //PDF

    public function member_pdf()
    {

        $members = User::where('idChurch_fk', '=', auth()->user()->idChurch_fk)
                                ->where('isActive', '=', true)
                                ->where('isDeleted', '=', false)
                                ->get();

        return \PDF::loadView('church.member.pdf.members', compact('members'))->setPaper('a4', 'landscape')->stream();
    }

    public function birth_pdf($month)
    {

        $members = User::whereMonth('birth', $month)
                                ->where('idChurch_fk', '=', auth()->user()->idChurch_fk)
                                ->where('isActive', '=', true)
                                ->where('isDeleted', '=', false)
                                ->get();

        return \PDF::loadView('church.birth.pdf.birthdays', compact('members'))->stream();
    }









    //INVITE

    public function create_invite($hash)
    {
        $church = Church::where('hash', $hash)->first();

        $states = State::get();

        return view('church.member.invite.create', compact('hash', 'church', 'states'));
    }

    public function store_invite(Request $request, $hash)
    {

        // $validator = validator($request, [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'complement' => 'nullable'
        // ]);

        // if($validator->fails())


        $nameFile = null;
        if ( $request->hasfile('avatar') && $request->file('avatar')->isValid() ) {
        // dd($request);
            $nameFile = Laracrop::cropImage($request->input('avatar'));

            // Storage::delete("members/{$member->avatar}");

            File::move(public_path("filetmp/{$nameFile}"), storage_path("app/public/members/{$nameFile}"));

        }



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
            'avatar'        => $nameFile,
            'idChurch_fk'   => $church->id,
            'isMember'      => true,
            'idAddress_fk'  => $address->id,
            'isActive'      => false,
            'isPendent'     => true
        ];


        $result = User::create($request_user);

        Laracrop::cleanCropTemp();

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

