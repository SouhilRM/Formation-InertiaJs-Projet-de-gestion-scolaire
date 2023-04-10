<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index(){
        return inertia('Back-end/Etudiant/IndexEtudiant');
    }

    public function create(){
        return inertia('Back-end/Etudiant/CreateEtudiant');
    }
}
