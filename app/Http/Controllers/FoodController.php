<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /* Page Principale */
    public function index(){
        /*
        Lecture de la table food
        avec une pagination de 4 résultats par page
        */

        // $foods=Food::All() ;
        $foods=Food::Paginate(4) ;

        /* Affichage des données dans la vue Accueil à partir de $foods */

        return view("accueil", compact("foods"));
    }

        /* Afffiche le détail d'un élément à partir de son identifiant $id */
    public function detail($id=0){

        /* Sélectionne/Lit le premier élément à partir de son identifiant */
        $food = Food::where('id',$id)->first() ;
        // dd($food) ;

        /* Affichage des données dans le détail */
        return view("detail", compact("food"));
    }
}
