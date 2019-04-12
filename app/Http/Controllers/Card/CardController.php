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
        $members = auth()->user()->church->members()
                            ->where('isActive', '=', true)
                            ->where('isDeleted', '=', false)
                            ->get();

        $church = auth()->user()->church();

        return view('church.card.home', ['members' => $members, 'church' => $church]);
    }

    public function card_pdf(Request $request)
    {
        if(!$request->id_users)
            return redirect()
                        ->back()
                        ->with('error', 'Nenhum membro selecionado!');
  
        $members = User::where('idChurch_fk', '=', auth()->user()->idChurch_fk)
                            ->where('isActive', '=', true)
                            ->where('isDeleted', '=', false)
                            ->whereIn('id', $request->id_users)
                            ->get();
               
        return \PDF::loadView('church.card.pdf.cards', ['members' => $members])->stream();
    }
}
