<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('candidats.ajouter');
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
       $candidat = new Candidat();
       $candidat->prenom = $request->prenom;
       $candidat->nom = $request->nom;
       $candidat->datenaissance = $request->datenaissance;
       $candidat->parti = $request->parti;
       $candidat->save();
      return  redirect()->back()->with('success','candidat enregistrer');
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
        $candidat = Candidat::find($id);
        

        return view ('candidats.edit', compact('candidat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $candidat=  Candidat::find($id);
        $candidat->prenom = $request->prenom;
        $candidat->nom = $request->nom;
        $candidat->datenaissance = $request->datenaissance;
        $candidat->parti = $request->parti;
        $candidat->update();

        return  redirect()->back()->with('success','candidat modifié');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        //
        $candidat =Candidat:: find($id);
        $candidat->delete();
        return redirect()->back()->with('success','candidat supprimé');

    }
    public function liste()
    {
        //
        $candidat= Candidat ::All();
        // dd($candidat);
        return view('candidats.liste', compact('candidat'));
    }
}
