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


            /* Enregistrement en base de données */
    public function save(Request $request){

        $validated = $request->validate([
            'nom' => 'required',

        ]);

        // dd($request) ;
        return view("contact") ; 
    }
}
