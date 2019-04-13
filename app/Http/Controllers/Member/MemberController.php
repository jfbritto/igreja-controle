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
        $users = auth()->user()->church->members()->where('isDeleted', '=', false)->get();

        $church = auth()->user()->church;

        return view('church.member.home', ['members' => $users, 'church' => $church]);
    }

    public function create()
    {
        $states = State::get();

        return view('church.member.create', ['states' => $states]);
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

        $verify_exists = User::where('email', $request->email)
                                                        ->where('idChurch_fk', auth()->user()->idChurch_fk)
                                                        ->where('isDeleted', false)
                                                        ->count();                

        if($verify_exists)
            return redirect()
                        ->back()
                        ->withInput()
                        ->with('error', 'Email já está sendo usado por outro membro!');

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
                'baptismDate'   => $request->baptismDate,
                'memberSince'   => $request->memberSince,
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

            // throw new Exception($e->getMessage());

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

    public function show(User $user)
    {

        if($user->church->id != auth()->user()->idChurch_fk) abort('401');

        if($user->isDeleted == true) abort('401');

        $states = State::get();

        return view('church.member.show', ['member' => $user, 'states' => $states]);
    }

    public function edit(User $user)
    {

        if($user->church->id != auth()->user()->idChurch_fk) abort('401');

        if($user->isDeleted == true) abort('401');

        if(!$user->address) abort('401');

        $states = State::get();
        
        return view('church.member.edit', ['member' => $user, 'states' => $states]);
    }

    public function update(Request $request, User $user)
    {

        if($user->church->id != auth()->user()->idChurch_fk) abort('401');

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
        
            $address = $user->address;

            $nameFile = $user->avatar;
            if ( $request->hasfile('avatar') && $request->file('avatar')->isValid() ) {
                $nameFile = Laracrop::cropImage($request->input('avatar'));
                Storage::delete("members/{$user->avatar}");
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
                'baptismDate'   => $request->baptismDate,
                'memberSince'   => $request->memberSince,
            ];


            $address->update($request_address);
            $result = $user->update($request_user);
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
                        ->with('error', 'Erro ao editar o membro!');
        else
            return redirect()
                        ->route('member')
                        ->with('success', 'Membro editado com sucesso!');
    }

    public function destroy(User $user)
    {

        if($user->church->id != auth()->user()->idChurch_fk) abort('401');

        $result = null;

        DB::beginTransaction();
        try{

            $updates = ['isActive' => false, 'isDeleted' => true];
            $result = $user->update($updates);
         
            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
            abort('500');
        }

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao deletar membro!');
        else
            return redirect()
                        ->route('member')
                        ->with('success', 'Membro deletado com sucesso!');

    }

    public function inactivate(User $user)
    {
        if($user->church->id != auth()->user()->idChurch_fk) abort('401');

        $result = null;

        DB::beginTransaction();
        try{

            $updates = ['isActive' => false];
            $result = $user->update($updates);

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
            abort('500');
        }

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao desativar membro!');
        else
            return redirect()
                        ->route('member')
                        ->with('success', 'Membro desativado com sucesso!');
    }

    public function activate(User $user)
    {
        if($user->church->id != auth()->user()->idChurch_fk) abort('401');

        $result = null;

        DB::beginTransaction();
        try{

            $updates = ['isActive' => true];
            $result = $user->update($updates);
        
            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
            abort('500');
        }

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao ativar membro!');
        else
            return redirect()
                        ->route('member')
                        ->with('success', 'Membro ativado com sucesso!');
    }


    public function validate_member(User $user)
    {
        if($user->church->id != auth()->user()->idChurch_fk) abort('401');

        $result = null;

        DB::beginTransaction();
        try{

            $updates = ['isActive' => true, 'isPendent' => false];
            $result = $user->update($updates);
        
            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
            abort('500');
        }

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao validar membro!');
        else
            return redirect()
                        ->route('member')
                        ->with('success', 'Membro validado com sucesso!');
    }










    public function create_admin(Church $church)
    {

        $states = State::get();

        return view('admin.church.user.create', ['states' => $states, 'church' => $church]);
    }


    public function store_admin(Request $request, Church $church)
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

        $verify_exists = User::where('email', $request->email)
                                                        ->where('idChurch_fk', $church->id)
                                                        ->where('isDeleted', false)
                                                        ->count();                

        if($verify_exists)
            return redirect()
                        ->back()
                        ->withInput()
                        ->with('error', 'Email já está sendo usado por outro membro!');

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
                'baptismDate'   => $request->baptismDate,
                'memberSince'   => $request->memberSince,
                'avatar'        => $nameFile,
                'idChurch_fk'   => $church->id,
                'isMember'      => false,
                'idAddress_fk'  => $address->id
            ];


            $result = User::create($request_user);

            Laracrop::cleanCropTemp();

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            throw new Exception($e->getMessage());

            $result = null;
            
            abort('500');
        }

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao cadastrar usuário!');
        else
            return redirect()
                            ->route('church.show', $church->id)
                            ->with('success', 'Usuário cadastrado com sucesso!');


    }



    public function show_admin(User $user)
    {

        $states = State::get();
        $cities = $user->address->state->cities;

        return view('admin.church.user.show', ['user' => $user, 'states' => $states, 'cities' => $cities, 'address' => $user->address]);
    }



    public function edit_admin(User $user)
    {

        $states = State::get();
        
        return view('admin.church.user.edit', ['user' => $user, 'states' => $states]);
    }

    public function update_admin(Request $request, User $user)
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
            
            $nameFile = $user->avatar;
            if ( $request->hasfile('avatar') && $request->file('avatar')->isValid() ) {
                $nameFile = Laracrop::cropImage($request->input('avatar'));
                Storage::delete("members/{$user->avatar}");
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
                'baptismDate'   => $request->baptismDate,
                'memberSince'   => $request->memberSince,
            ];


            $user->address->update($request_address);
            
            $result = $user->update($request_user);

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
            abort('500');
        }   

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao editar o usuário!');
        else
            return redirect()
                        ->route('church.show', $user->church->id)
                        ->with('success', 'Usuário editado com sucesso!');
    }



    public function inactivate_admin(User $user)
    {

        $result = null;

        DB::beginTransaction();
        try{

            $updates = ['isActive' => false];
            $result = $user->update($updates);

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
            abort('500');
        }

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao desativar usuário!');
        else
            return redirect()
                        ->route('church.show', $user->church->id)
                        ->with('success', 'Usuário desativado com sucesso!');
    }

    public function activate_admin(User $user)
    {

        $result = null;

        DB::beginTransaction();
        try{

            $updates = ['isActive' => true];
            $result = $user->update($updates);

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
            abort('500');
        }

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao ativar usuário!');
        else
            return redirect()
                        ->route('church.show', $user->church->id)
                        ->with('success', 'Usuário ativado com sucesso!');
    }


    public function destroy_admin(User $user)
    {

        $result = null;

        DB::beginTransaction();
        try{

            $updates = ['isActive' => false, 'isDeleted' => true];
            $result = $user->update($updates);
         
            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
            abort('500');
        }

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
            'baptismDate'   => $request->baptismDate,
            'memberSince'   => $request->memberSince,
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

