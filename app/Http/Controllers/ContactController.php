<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    
            /*
            **   Formulaire de contact
            */

    public function index(){

        return view("contact") ;
    }


            /* Réception et Enregistrement des données de mon formulaire */
    public function save(Request $request){

        $validated = $request->validate([
            'nom' => 'required',

        ]);

        // dd($request) ;
        return view("contact") ; 
    }
}
