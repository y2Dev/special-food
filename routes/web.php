<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/', function () {
//     return view('accueil');
// });

Route::get('/', [FoodController::class,'index'])->name("acceuil");

Route::get('/detail/{id}', [FoodController::class,'detail'])->name("detail");

// Affichage du formulaire de contact en GET
Route::get('/contactez-nous', [ContactController::class,'index'])->name("contact");

// Réception des données du formulaire de contact en POST
Route::post('/contactez-nous', [ContactController::class,'save'])->name("contact");
