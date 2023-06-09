<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\NiveauScolaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        return inertia(
            'Back-end/Etudiant/CreateEtudiant',
            [
                "niveauxScolaires" => NiveauScolaire::all(),
            ]
        );
    }

    public function store(Request $request){
        $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "sex" => "required",
            "age" => "required|numeric",
            "niveau_scolaire_id" => "required|exists:niveau_scolaires,id"
        ],[
            "nom.required" => "Le nom de l'étudiant est requis.",
            "prenom.required" => "Le prenom de l'étudiant est requis.",
            "sex.required" => "Le sex de l'étudiant est requis.",
            "age.required" => "L'age de l'étudiant est requis.",
            "age.numeric" => "Donnez un age valide",
            "niveau_scolaire_id.required" => "Le niveau scolaire de l'étudiant est requis.",
            "niveau_scolaire_id.exists" => "Ce niveau scolaire n'existe pas"
        ]);

        $etudiant = Etudiant::create($request->all());

        //si l'utilisateur à séléctionner une photot
        $photot = $request->file('photot');
        if($photot){
            $fileName = hexdec(uniqid()).'.'.$photot->getClientOriginalExtension();
            //il va etre stocké dans le dossier "storage->app->public" et il va creer le dossier photot automatiquement
            $filePath = $photot->storeAs("photot", $fileName, "public");
            $etudiant->photot = $filePath;
            $etudiant->save();
        }

        return redirect()->route('etudiant.index');
    }

    public function delete(Etudiant $etudiant){

        if($etudiant->photot){
            //dd($etudiant->photot);
            Storage::delete('public/'.$etudiant->photot);
        }
        $etudiant->delete();
        return redirect()->back();
    }

    public function edit(Etudiant $etudiant){
        return inertia(
            'Back-end/Etudiant/EditEtudiant',
            [
                "niveauxScolaires" => NiveauScolaire::all(),
                'etudiant' => $etudiant
            ]
        );
    }

    public function update(Request $request, Etudiant $etudiant){
        $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "sex" => "required",
            "age" => "required|numeric",
            "niveau_scolaire_id" => "required|exists:niveau_scolaires,id"
        ],[
            "nom.required" => "Le nom de l'étudiant est requis.",
            "prenom.required" => "Le prenom de l'étudiant est requis.",
            "sex.required" => "Le sex de l'étudiant est requis.",
            "age.required" => "L'age de l'étudiant est requis.",
            "age.numeric" => "Donnez un age valide",
            "niveau_scolaire_id.required" => "Le niveau scolaire de l'étudiant est requis.",
            "niveau_scolaire_id.exists" => "Ce niveau scolaire n'existe pas"
        ]);
        $photot = $request->file('photot');
        
        if($photot){
            Storage::delete('public/'.$etudiant->photot);
        }
        $etudiant->update($request->all());
        
        if($photot){
            //Storage::delete('public/'.$etudiant->photot);
            $fileName = hexdec(uniqid()).'.'.$photot->getClientOriginalExtension();
            $filePath = $photot->storeAs("photot", $fileName, "public");
            $etudiant->photot = $filePath;
            $etudiant->save();
        }

        return redirect()->back();
    }
}
