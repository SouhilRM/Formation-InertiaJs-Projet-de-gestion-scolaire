<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\NiveauScolaireController;


//Dashboard
Route::get('/', function () {
    return Inertia::render('Back-end/Dashboard');
})->name('Dashboard');

/* ========================================Etudiant======================================= */
    Route::controller(EtudiantController::class)->group(function(){

        Route::get('/etudiant','index')->name('etudiant.index');
        Route::get('/etudiant/create','create')->name('etudiant.create');
        Route::post('/etudiant/store','store')->name('etudiant.store');
        Route::get('/etudiant/edit/{etudiant}','edit')->name('etudiant.edit');
        Route::post('/etudiant/update/{etudiant}','update')->name('etudiant.update');
        Route::delete('/etudiant/delete/{etudiant}','delete')->name('etudiant.delete');

    });
/* ========================================/Etudiant======================================= */

/* =====================================NiveauScolaire==================================== */
    Route::controller(NiveauScolaireController::class)->group(function(){

        Route::get('/niveauscolaire','index')->name('niveauscolaire.index');
        Route::post('/niveauscolaire/store','store')->name('niveauscolaire.store');
        Route::get('/niveauscolaire/edit/{niveauScolaire}','edit')->name('niveauscolaire.edit');
        Route::put('/niveauscolaire/update/{niveauScolaire}','update')->name('niveauscolaire.update');
        Route::delete('/niveauscolaire/delete/{niveauScolaire}','delete')->name('niveauscolaire.delete');
    });
/* =====================================/NiveauScolaire==================================== */