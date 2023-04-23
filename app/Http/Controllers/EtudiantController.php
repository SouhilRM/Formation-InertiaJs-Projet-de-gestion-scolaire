<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index(){
        return inertia(
            'Back-end/Etudiant/IndexEtudiant',
            [
                "etudiants" => Etudiant::latest()->with("niveau_scolaire")->get(),
            ]
        );
    }

    public function create(){
        return inertia('Back-end/Etudiant/CreateEtudiant');
    }
}
