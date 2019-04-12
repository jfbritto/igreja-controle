<?php

namespace App\Http\Controllers\Search;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\State;
use App\Models\Finance;

class SearchController extends Controller
{
    public function search_city($id){
		
    	$state = State::find($id);

		$cities = City::where('idEstado', '=', $state->id)->get();

		$results = array();
		
		
		foreach ($cities as $city)
		{
		    $results[] = [ 'id' => $city->id, 'value' => $city->nome ];
		}

		return Response::json($results);
	}

	public function search_description($description){
		
		$results = array();

		$moviments = Finance::where('idChurch_fk', '=', auth()->user()->church->id)->where('comments', 'like', $description."%")->distinct()->get();
		


		foreach ($moviments as $moviment) {
            $results['autocomplete'][] = $moviment->comments;
        }

		return Response::json($results);
	}
}
