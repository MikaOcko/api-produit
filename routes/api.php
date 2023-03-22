<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProduitsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Afficher tous les produits
Route::get('/produits', [ProduitsController::class, "liste"]);
// Afficher un produit
Route::get('/produits/{id}', [ProduitsController::class, "detail"]);
//Ajouter un produit
Route::post('/produits', [ProduitsController::class, "ajouter"]);