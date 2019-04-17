<?php

namespace App\Http\Controllers\Doc;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DocFolder;
use App\Models\DocFile;
use DB;
use Exception;

class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $folders = auth()->user()->church->folders()->where('isDeleted', '=', false)->get();

        return view('church.doc.home', ['folders' => $folders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('church.doc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = validator($request->all(), [
            'name'             => 'required',
            'description'       => 'nullable'
        ], [] , [
                    'name' => 'nome', 
                    'description' => 'descrição'
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

            
            $result = DocFolder::create($request->all());

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
                        ->with('error', 'Erro ao criar pasta!');
        else
            return redirect()
                        ->route('doc')
                        ->with('success', 'Pasta criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DocFolder $folder)
    {
        if($folder->church->id != auth()->user()->idChurch_fk) abort('401');

        return view('church.doc.show', ['folder' => $folder]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DocFolder $folder)
    {
        if($folder->church->id != auth()->user()->idChurch_fk) abort('401');

        return view('church.doc.edit', ['folder' => $folder]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocFolder $folder)
    {

        if($folder->church->id != auth()->user()->idChurch_fk) abort('401');

        $validator = validator($request->all(), [
            'name'             => 'required',
            'description'       => 'nullable'
        ], [] , [
                    'name' => 'nome', 
                    'description' => 'descrição'
                ]);

        if($validator->fails())
            return redirect()
                        ->back()
                        ->witherrors($validator->errors())
                        ->withInput();
        

        $result = null;

        
        DB::beginTransaction();
        try{

            
            $result = $folder->update($request->all());

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
            abort('500');
        }

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao editar pasta!');
        else
            return redirect()
                        ->route('doc')
                        ->with('success', 'Pasta editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DocFolder $folder)
    {
        if($folder->church->id != auth()->user()->idChurch_fk) abort('401');

        $updates = ['isActive' => false, 'isDeleted' => true];                     
        
        $result = null;

        DB::beginTransaction();
        try{

            $result = $folder->update($updates);

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();



            $result = null;
            
            abort('500');
        }


        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao deletar pasta!');
        else
            return redirect()
                        ->route('doc')
                        ->with('success', 'Pasta deletada com sucesso!');
    }
}
