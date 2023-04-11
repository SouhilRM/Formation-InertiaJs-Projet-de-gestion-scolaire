<?php

namespace App\Models;

use App\Models\NiveauScolaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etudiant extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function niveau_scolaire(){
        return $this->belongsTo(NiveauScolaire::class);
    }
}
