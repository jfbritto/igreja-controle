<?php

namespace App\Http\Controllers\Doc;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\DocFile;
use App\Models\DocFolder;
use DB;
use Exception;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, DocFolder $folder)
    {

        if($folder->church->id != auth()->user()->idChurch_fk) abort('401');

        $validator = validator($request->all(), [
            'name'             => 'required',
            'description'      => 'nullable',
            'doc'              => 'required | file | mimes:pdf,odt,docx,xlsx,ods,pptx,odp | max:3072',
        ], [] , [
                    'name'          => 'nome', 
                    'description'   => 'descrição'
                ]);

        if($validator->fails())
            return redirect()
                        ->back()
                        ->witherrors($validator->errors())
                        ->withInput();

        $result = null;

        // Define o valor default para a variável que contém o nome da imagem 
        $nameFile = null;
     
        
        DB::beginTransaction();
        try{

            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));
     
            // Recupera a extensão do arquivo
            $extension = $request->doc->extension();
     
            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";

            $file_size = $request->doc->getsize();
     
            // Faz o upload:
            $upload = $request->doc->storeAs('docs', $nameFile);
            // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao

            $request_file = $validator->getData();

            $request_file['idFolder_fk'] = $folder->id;
            $request_file['file_name'] = $nameFile;
            $request_file['file_size'] = $file_size;

            $result = DocFile::create($request_file);

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            // throw new Exception($e->getMessage());

            if (File::exists(storage_path("app/public/docs/{$nameFile}"))) {
                Storage::delete("docs/{$nameFile}");
            }

            $result = null;
            
        }

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao subir arquivo!');
        else
            return redirect()
                        ->route('doc.show', $folder->id)
                        ->with('success', 'Arquivo salvo com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DocFile $file)
    {
        if($file->folder->church->id != auth()->user()->idChurch_fk) abort('401');

        $result = null;
        $id_folder = $file->folder->id;
        
        DB::beginTransaction();
        try{

            $file->delete();
            $result = true;

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();

            $result = null;
            
        }

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao deletar arquivo!');
        else
            return redirect()
                        ->route('doc.show', $id_folder)
                        ->with('success', 'Arquivo deletado com sucesso!');


    }
}
