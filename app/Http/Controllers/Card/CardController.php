<?php

namespace App\Http\Controllers\Card;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Church;

class CardController extends Controller
{

    public function index()
    {
        $members = User::where('idChurch_fk', '=', auth()->user()->idChurch_fk)
                            ->where('isActive', '=', true)
                            ->where('isDeleted', '=', false)
                            ->get();

        $church = Church::where('id', auth()->user()->idChurch_fk)->first();

        return view('church.card.home', compact('members', 'church'));
    }

    public function card_pdf(Request $request)
    {
  
        $members = User::where('idChurch_fk', '=', auth()->user()->idChurch_fk)
                            ->where('isActive', '=', true)
                            ->where('isDeleted', '=', false)
                            ->whereIn('id', $request->id_users)
                            ->get();

        return \PDF::loadView('church.card.pdf.cards', compact('members'))->stream();
    }
}
