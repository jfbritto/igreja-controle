<?php

namespace App\Http\Controllers\Cell;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CellController extends Controller
{
    public function index()
    {
    	return view('church.cell.home');
    }
}
