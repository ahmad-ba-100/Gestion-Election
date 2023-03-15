<?php

use App\Http\Controllers\CandidatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/candidats/liste',[CandidatController::class,'liste'])->name('liste.candidats');


Route::get('/candidats.ajouter',[CandidatController::class,'index'])->name('ajouter.candidat');
Route::post('/enregistrer/candidat',[CandidatController::class,'store'])->name('store.candidat');
Route::get('/supprimercandidat/{id}',[CandidatController::class,'delete'])->name('delete.candidat');
Route::get('/candidatedit/{id}',[CandidatController::class,'edit'])->name('edit.candidat');
Route::post('/candidatupdate/{id}',[CandidatController::class,'update'])->name('update.candidat');
