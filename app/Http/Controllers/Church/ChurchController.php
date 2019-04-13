<?php

namespace App\Http\Controllers\Church;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Church;
use App\Models\State;
use App\Models\Address;
use App\Models\City;
use App\Models\Finance;
use App\Models\User;
use App\Models\Event;
use Arisharyanto\Laracrop\Laracrop;
use DB;
use Exception;

class ChurchController extends Controller
{
    public function index()
    {
        $churches = Church::where('isDeleted', false)->get();

        return view('admin.church.home', compact('churches'));
    }

    public function home()
    {

        $total_entries = Finance::where('idChurch_fk', '=',auth()->user()->idChurch_fk)
                                        ->where('type', '=', 'I')->sum('value');

        $total_outputs = Finance::where('idChurch_fk', '=',auth()->user()->idChurch_fk)
                                        ->where('type', '=', 'O')->sum('value');

        $total_box = $total_entries - $total_outputs;

        $members = User::where('idChurch_fk', '=', auth()->user()->idChurch_fk)
                            ->where('isDeleted', '=', false)
                            ->count();

        $events = Event::where('idChurch_fk', '=', auth()->user()->idChurch_fk)
                            ->where('isActive', '=', true)
                            ->where('isDeleted', '=', false)
                            ->whereDate('endDate', '>', now())
                            ->count();                    

        $births = User::whereMonth('birth', date('m'))
                                    ->where('idChurch_fk', '=', auth()->user()->idChurch_fk)
                                    ->where('isActive', '=', true)
                                    ->where('isDeleted', '=', false)
                                    ->count();                    

        return view('church.home', compact('total_box', 'members', 'events', 'births'));
    }

    public function create()
    {

        $states = State::get();

        return view('admin.church.create', ['states' => $states]);
    }

    public function store(Request $request)
    {

        $validator = validator($request->all(), [
            'name'          => 'required',
            'email'         => 'required | email',
            'cnpj'          => 'required | max:18',
            'phone'         => 'required',
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
                    'phone' => 'telefone',
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
                File::move(public_path("filetmp/{$nameFile}"), storage_path("app/public/churches/{$nameFile}"));
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
            
            $request_church = [
                'name'          => $request->name,
                'email'         => $request->email,
                'cnpj'          => $request->cnpj,
                'phone'         => $request->phone,
                'avatar'        => $nameFile,
                'idAddress_fk'  => $address->id,
                'lat'           => $address->lat,
                'long'          => $address->long
            ];


            $result = Church::create($request_church);


        DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
            abort('500');
        }

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao cadastrar igreja!');
        else
            return redirect()
                        ->route('church')
                        ->with('success', 'Igreja cadastrada com sucesso!');
    }

    public function show(Church $church)
    {

        $states = State::get();

        return view('admin.church.show', ['church' => $church, 'states' => $states]);
    }

    public function edit(Church $church)
    {

        $states = State::get();

        return view('admin.church.edit', ['church' => $church, 'states' => $states]);
    }

    public function update(Request $request, Church $church)
    {

        $validator = validator($request->all(), [
            'name'          => 'required',
            'email'         => 'required | email',
            'cnpj'          => 'required | max:18',
            'phone'         => 'required',
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
                    'phone' => 'telefone',
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
        
            $nameFile = $church->avatar;
            if ( $request->hasfile('avatar') && $request->file('avatar')->isValid() ) {
                $nameFile = Laracrop::cropImage($request->input('avatar'));
                Storage::delete("churches/{$church->avatar}");
                File::move(public_path("filetmp/{$nameFile}"), storage_path("app/public/churches/{$nameFile}"));
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

            
            $request_church = [
                'name'          => $request->name,
                'email'         => $request->email,
                'cnpj'          => $request->cnpj,
                'phone'         => $request->phone,
                'avatar'        => $nameFile,
                'lat'           => $address->lat,
                'long'          => $address->long
            ];

            $church->update($request_church); 
            
            $result = $church->address->update($request_address);

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
            abort('500');
        }

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao editar igreja!');
        else
            return redirect()
                        ->route('church')
                        ->with('success', 'Igreja editada com sucesso!');

    }


    public function destroy(Church $church)
    {

        $result = null;

        DB::beginTransaction();
        try{
    
            $updates = ['isActive' => false, 'isDeleted' => true];                    
            $result = $church->update($updates);
            
            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
            abort('500');
        }

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao deletar igreja!');
        else
            return redirect()
                        ->route('church')
                        ->with('success', 'Igreja deletada com sucesso!');

    }

    public function inactivate(Church $church)
    {

        $result = null;

        DB::beginTransaction();
        try{
            
            $updates = ['isActive' => false];                    
            $result = $church->update($updates);
            
            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
            abort('500');
        }


        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao desativar igreja!');
        else
            return redirect()
                        ->route('church')
                        ->with('success', 'Igreja desativada com sucesso!');
    }

    public function activate(Church $church){

        $result = null;

        DB::beginTransaction();
        try{

            $updates = ['isActive' => true];                    
            $result = $church->update($updates);

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
            abort('500');
        }

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

        $validator = validator($request->all(), [

            'avatar' => 'nullable | file | mimes:jpg,png,jpeg,bmp | max:3072',

        ]);

        if($validator->fails())
            return redirect()
                        ->back()
                        ->witherrors($validator->errors())
                        ->withInput();
      

        $result = null;

        DB::beginTransaction();
        try{

            $nameFile = $church->avatar;
            if ( $request->hasfile('avatar') && $request->file('avatar')->isValid() ) {
                $nameFile = Laracrop::cropImage($request->input('avatar'));
                Storage::delete("churches/{auth()->user()->church()}");
                File::move(public_path("filetmp/{$nameFile}"), storage_path("app/public/churches/{$nameFile}"));
            }

            $request_church = [
                'avatar' => $nameFile,
            ];

            $result = auth()->user()->church()->update($request_church);

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
                        ->with('error', 'Erro ao editar igreja!');
        else
            return redirect()
                        ->route('config')
                        ->with('success', 'Igreja editada com sucesso!');


    }
}





