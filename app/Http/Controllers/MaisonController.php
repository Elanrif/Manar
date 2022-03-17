<?php

namespace App\Http\Controllers;

use App\Models\Maison;
use Illuminate\Http\Request;

class MaisonController extends Controller
{
    public function maison() { 

        $maisons = Maison::all();

        return view('maison',compact('maisons')) ; 
    }

    public function show(Request $request) { 

        $locations = Maison::findOrFail($request->id) ; 

        $locations->maison_proprietaire ; 

        return view('showMaison',compact('locations'));
    }

  
}
