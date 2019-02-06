<?php

namespace App\Http\Controllers\Card;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class CardController extends Controller
{

    public function index()
    {
        return view('church.card.home');
    }

    public function card_pdf()
    {
  
        $members = User::where('idChurch_fk', '=', auth()->user()->idChurch_fk)
                            ->where('isMember', '=', true)
                            ->where('isActive', '=', true)
                            ->where('isDeleted', '=', false)
                            ->get();
    
        return \PDF::loadView('church.card.pdf.cards', compact('members'))->stream();
    }
}
