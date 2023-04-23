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
        //Route::get('/edit/{id}','EditBrand')->name('edit.brand');
        //Route::post('/update','UpdateBrand')->name('update.brand');
        //Route::get('/delete/{id}','DeleteBrand')->name('delete.brand');

    });
/* ========================================/Etudiant======================================= */

/* =====================================NiveauScolaire==================================== */
    Route::controller(NiveauScolaireController::class)->group(function(){

        Route::get('/niveauscolaire','index')->name('niveauscolaire.index');
        Route::post('/niveauscolaire/store','store')->name('niveauscolaire.store');
        Route::get('/niveauscolaire/edit/{niveauScolaire}','edit')->name('niveauscolaire.edit');
        Route::put('/niveauscolaire/update/{niveauScolaire}','update')->name('niveauscolaire.update');
        
        //Route::get('/delete/{id}','DeleteBrand')->name('delete.brand');

    });
/* =====================================/NiveauScolaire==================================== */