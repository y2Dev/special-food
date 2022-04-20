<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
            /*
            **   Formulaire de contact
            */

    public function index(){

        return view("contact",compact("enregistrementOk")) ;
    }


            /* Réception et Enregistrement des données de mon formulaire */
    public function save(Request $request){
        // $request contient session

        $enregistrementOk = false ;
        
        $validation = $request->validate([
            'nom' => 'required|min:3',
            'prenom' => 'required',
        ]);

        if (isset($validation)) {    //créer une instance de class pour tester la validation des champs de la session

            $contact = new Contact ; //ensuite faire clic-droit importer class plus-haut

            $contact->nom = $request->nom ; 
            $contact->prenom = $request->prenom ; 
            $contact->email ="mail@mail.com" ; 
            $contact->telephone = "0696" ; 
            $contact->adresse = "Bloc" ; 

            $contact->save() ; 

            
        }

        $enregistrementOk = true ;
        // dd($request) ;
        return view("contact",compact("enregistrementOk")) ; //redirige l'utilisateur vers page vierge
    }
}
