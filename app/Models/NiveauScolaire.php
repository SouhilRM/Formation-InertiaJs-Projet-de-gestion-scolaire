<?php

namespace App\Models;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NiveauScolaire extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function etudiants(){
        return $this->hasMany(Etudiant::class);
    }
}
