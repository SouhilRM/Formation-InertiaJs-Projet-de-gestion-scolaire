<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("prenom")->nullable();
            $table->char("sex")->nullable();
            $table->integer("age")->nullable();
            $table->foreignId("niveau_scolaire_id")->constrained();
            $table->string("photot")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumns('etudiants', [
            'nom', 'prenom', 'sex', 'age', 'photot'
        ]);
        Schema::table(function(Blueprint $table){
            $table->dropConstrainedForeignId("niveau_scolaire_id");
        });
        Schema::dropIfExists('etudiants');
    }
};
