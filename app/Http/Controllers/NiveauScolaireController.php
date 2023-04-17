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
                "niveauScolaire" => NiveauScolaire::latest()->get(),
            ]
        );
    }

    public function store(Request $request){
        //dd($request->all());
        NiveauScolaire::create($request->all());

        return redirect()->back();
    }
}
