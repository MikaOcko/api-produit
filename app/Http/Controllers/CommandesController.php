<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Commande $commande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Commande $commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commande $commande)
    {
        //
    }

    // Fonction permettant d'ajouter une commande
    function ajouterCommande(Request $request)
    {
        // Code permettant de créer une commande
        $commande = new Commande();
        $commande->id_client = $request->id_client;
        $commande->id_produit = $request->id_produit;
        $commande->quantite = $request->quantite;
        $commande->date = $request->date;
        $commande->save();
        return response()->json($commande);
    }

    // Fonction permettant de lister les commandes d'un client
    function commandesClient($idClient)
    {
        return response()->json(Commande::where('id_client', $idClient)->with('produit')->get());
    }

    // Fonction permettant de lister toutes les commandes
    function commandesAll(Request $request)
    {
        return response()->json(Commande::all());
    }

    function supprimerCommande($idCommande)
    {
        Commande::destroy('id', $idCommande);
    }
}
