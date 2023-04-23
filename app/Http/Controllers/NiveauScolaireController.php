<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\NiveauScolaire;

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

        $request->validate([
            "nom" => "required | unique:App\Models\NiveauScolaire,nom"
        ],[
            "nom.required" => "Le nom du niveau scolaire est requis.",
            "nom.unique" => "Ce nom est déja utilisé."
        ]);

        NiveauScolaire::create($request->all());

        return redirect()->back();
    }

    public function edit(NiveauScolaire $niveauScolaire){
        return response()->json($niveauScolaire);
                             //(["niveauScolaire" => $niveauScolaire])
    }

    public function update(Request $request, NiveauScolaire $niveauScolaire){
        //je fais ma validation et je mets à jour ma bdd seulement si ya changement
        if($request->nom !== $niveauScolaire->nom){
            $request->validate([
                "nom" => "required | unique:App\Models\NiveauScolaire,nom"
            ],[
                "nom.required" => "Le nom du niveau scolaire est requis.",
                "nom.unique" => "Ce nom est déja utilisé."
            ]);
            $niveauScolaire->update($request->all());
        }
        return redirect()->back();
    }
}
