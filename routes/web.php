<?php

use App\Http\Controllers\CandidatController;
use App\Http\Controllers\ElecteurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// Route pour CANDIDAT

Route::get('/candidats.ajouter',[CandidatController::class,'index'])->name('ajouter.candidat');
Route::post('/enregistrer/candidat',[CandidatController::class,'store'])->name('store.candidat');
Route::get('/candidatedit/{id}',[CandidatController::class,'edit'])->name('edit.candidat');
Route::post('/candidatupdate/{id}',[CandidatController::class,'update'])->name('update.candidat');
Route::get('/supprimercandidat/{id}',[CandidatController::class,'delete'])->name('delete.candidat');
Route::get('/candidats/liste',[CandidatController::class,'liste'])->name('liste.candidats');

// Route pour Electeurs
Route::get('/electeur/ajouter',[ElecteurController::class,'create'])->name('ajouter.electeur');
Route::post('/electeur/ajouté', [ElecteurController::class,'store'])->name('store.electeur');
Route::get('/electeurs/liste',[ElecteurController::class,'liste'])->name('liste.electeur');