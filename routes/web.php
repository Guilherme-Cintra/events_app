<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\EventController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [EventController::class,'index']);
Route::get('/events/create', [EventController::class,'create']);


Route::get('/produits', function () {
   
    $recherche = request('search');
    return view('produits', ['recherche' => $recherche]);
});

Route::get('/produit/{id}', function ($id = null) {
   
    return view('produit', ['id' => $id]);
});
