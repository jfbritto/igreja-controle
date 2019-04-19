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


    public function site_church($url)
    {

    	$church = Church::where('site_url', 'like', $url)->get()->first();

    	if (!$church) abort('404');

        return view('site.church', ['church' => $church]);
    }

    
}
