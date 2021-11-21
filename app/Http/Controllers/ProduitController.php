<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'filiale_id' => 'required|exists:filiales,id',
            'nom' => 'required',
            'prixUnitaire' => 'required',
            'quantite' => 'required'
        ]);
        DB::beginTransaction();
        try {
            for ($i=0; $i < $request->get('nombreRecords'); $i++) {
                $produit = new Produit();
                $produit->nom = $request->nom[$i];
                $produit->prixUntaire = $request->get('prixUnitaire')[$i];
                $produit->quantite = $request->get('quantite')[$i];
                $produit->filiale_id = $request->filiale_id;
                $produit->save();
            }
            DB::commit();
            notify("Tous les produits sont enregistrés");
        } catch(Exception $e) {
            DB::rollback();
            notify()->error("Une erreur s'est produite !!!!");
            throw $e;
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        //
    }
}
