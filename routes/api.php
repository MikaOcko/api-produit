<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\CommandesController;

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

//Ajouter une commande
Route::post('/commandes', [CommandesController::class, "ajouterCommande"]);
//Afficher toutes les commandes d'un client
Route::get('/commandes/{idClient}', [CommandesController::class, "commandesClient"]);
// // Afficher toutes les commandes de tous les clients
Route::get('/commandesall', [CommandesController::class, "commandesAll"]);
// Supprimer une commande
Route::delete('/commandes/{idCommande}', [CommandesController::class, "supprimerCommande"]);
