<?php

namespace App\Http\Controllers\Inscription;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InscriptionController extends Controller
{

    public function index()
    {
        return view('church.inscription.home');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
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
