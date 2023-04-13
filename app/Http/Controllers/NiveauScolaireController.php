<?php

namespace App\Http\Controllers;

use App\Models\NiveauScolaire;
use Illuminate\Http\Request;

class NiveauScolaireController extends Controller
{
    public function index(){
        return inertia(
            'Back-end/NiveauScolaire/IndexNS',
            [
                "niveauScolaire" => NiveauScolaire::orderBy('nom','ASC')->get(),
            ]
        );
    }
}
