<?php

namespace App\Http\Controllers\Search;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\State;

class SearchController extends Controller
{
    public function autocomplete($id){
		
    	$state = State::find($id);

		$cities = City::where('idEstado', '=', $state->id)->get();

		$results = array();
		
		
		foreach ($cities as $city)
		{
		    $results[] = [ 'id' => $city->id, 'value' => $city->nome ];
		}

		return Response::json($results);
	}
}
