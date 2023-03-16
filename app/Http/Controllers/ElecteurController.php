<?php

namespace App\Http\Controllers;

use App\Models\Electeur;
use App\Models\Candidat;
use Illuminate\Http\Request;

class ElecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $candidat= Candidat ::All();
        //
        return view('electeurs.ajouter',compact('candidat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $electeur = new Electeur();
        $electeur->prenom = $request->prenom;
        $electeur->nom = $request->nom;
        $electeur->cni = $request->cni;
        $electeur->candidat_id = $request->candidat_id;


        $electeur-> save();
        
        return back()->with('success', 'electeur ajouté avec succes');



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function liste(){
        $electeur = Electeur::All();
        $candidat = Candidat::All();
       
        return view('electeurs.liste', compact('electeur'),compact('candidat'));
    }
}
