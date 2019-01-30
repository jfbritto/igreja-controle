<?php

namespace App\Http\Controllers\Church;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChurchController extends Controller
{
    public function index()
    {
        return view('church.home');
    }
}
