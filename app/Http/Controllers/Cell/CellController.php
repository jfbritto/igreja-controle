<?php

namespace App\Http\Controllers\Cell;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cell;
use Arisharyanto\Laracrop\Laracrop;
use DB;
use Exception;

class CellController extends Controller
{
    public function index()
    {
    	$cells = Cell::where('isDeleted', '=', false)->get();

    	return view('church.cell.home', ['cells' => $cells]);
    }



    public function create()
    {
        return view('church.cell.create');
    }


    public function store(Request $request)
    {


        $validator = validator($request->all(), [
            'title'             => 'required',
            'description'       => 'required',
            'nameResponsable'  	=> 'required',
            'phoneResponsable'  => 'required',
            'lat'           	=> 'nullable',
            'long'   			=> 'nullable',
            'avatar'  			=> 'nullable',
        ], [] , [
                    'title' => 'título', 
                    'description' => 'descrição',
                    'nameResponsable' => 'nome responsável', 
                    'phoneResponsable' => 'telefone responsavel', 
                    'lat' => 'latitude',
                    'long' => 'longitude'
                ]);

        if($validator->fails())
            return redirect()
                        ->back()
                        ->witherrors($validator->errors())
                        ->withInput();


        $request['idChurch_fk'] = auth()->user()->idChurch_fk;
        

        $result = null;

        
        DB::beginTransaction();
        try{

        	$nameFile = null;
            if ( $request->hasfile('avatar') && $request->file('avatar')->isValid() ) {
                $nameFile = Laracrop::cropImage($request->input('avatar'));
                File::move(public_path("filetmp/{$nameFile}"), storage_path("app/public/cells/{$nameFile}"));
            }

            $request_user = [
                'title'          	=> $request->title,
                'description'       => $request->description,
                'nameResponsable'   => $request->nameResponsable,
                'phoneResponsable'  => $request->phoneResponsable,
                'lat'           	=> $request->lat,
                'long'         		=> $request->long,
                'avatar'          	=> $nameFile,
                'idChurch_fk'   	=> auth()->user()->idChurch_fk
            ];

            
            $result = Cell::create($request_user);

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
            abort('500');
        }

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao cadastrar célula!');
        else
            return redirect()
                        ->route('cell')
                        ->with('success', 'Célula cadastrada com sucesso!');
    }


    public function show(Cell $cell)
    {             
        if($cell->church->id != auth()->user()->idChurch_fk) abort('401');

        if($cell->isDeleted == true) abort('401');

        return view('church.cell.show', ['cell' => $cell]);
    }


    public function edit(Cell $cell)
    {

        if($cell->church->id != auth()->user()->idChurch_fk) abort('401');

        if($cell->isDeleted == true) abort('401');

        return view('church.cell.edit', ['cell' => $cell]);
    }


    public function update(Request $request, Cell $cell)
    {

        if($cell->church->id != auth()->user()->idChurch_fk) abort('401');

        $validator = validator($request->all(), [
            'title'             => 'required',
            'description'       => 'required',
            'nameResponsable'  	=> 'required',
            'phoneResponsable'  => 'required',
            'lat'           	=> 'nullable',
            'long'   			=> 'nullable',
            'avatar'  			=> 'nullable',
        ], [] , [
                    'title' => 'título', 
                    'description' => 'descrição',
                    'nameResponsable' => 'nome responsável', 
                    'phoneResponsable' => 'telefone responsavel', 
                    'lat' => 'latitude',
                    'long' => 'longitude'
                ]);

        if($validator->fails())
            return redirect()
                        ->back()
                        ->witherrors($validator->errors())
                        ->withInput();


        $result = null;

        DB::beginTransaction();
        try{

        	$nameFile = $request->avatar;
            if ( $request->hasfile('avatar') && $request->file('avatar')->isValid() ) {
                $nameFile = Laracrop::cropImage($request->input('avatar'));
                Storage::delete("cells/{$cell->avatar}");
                File::move(public_path("filetmp/{$nameFile}"), storage_path("app/public/cells/{$nameFile}"));
            }

            $request_user = [
                'title'          	=> $request->title,
                'description'       => $request->description,
                'nameResponsable'   => $request->nameResponsable,
                'phoneResponsable'  => $request->phoneResponsable,
                'lat'           	=> $request->lat,
                'long'         		=> $request->long,
                'avatar'          	=> $nameFile
            ];

            $result = $cell->update($request_user);

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
                        ->with('error', 'Erro ao editar célula!');
        else
            return redirect()
                        ->route('cell')
                        ->with('success', 'Célula editada com sucesso!'); 

    }

    public function destroy(Cell $cell)
    {

        if($cell->church->id != auth()->user()->idChurch_fk) abort('401');

        $updates = ['isActive' => false, 'isDeleted' => true];                     
        
        $result = null;

        DB::beginTransaction();
        try{

            $result = $cell->update($updates);

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
            abort('500');
        }


        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao deletar célula!');
        else
            return redirect()
                        ->route('cell')
                        ->with('success', 'Célula deletada com sucesso!');                
    }




}
