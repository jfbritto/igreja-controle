<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Church;

class SiteController extends Controller
{
    public function index()
    {

    	$churches = Church::where('isDeleted', false)->get();

        return view('site.index', ['churches' => $churches]);
    }
}
