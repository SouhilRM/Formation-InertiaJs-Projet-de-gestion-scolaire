<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Etudiant;
use App\Models\NiveauScolaire;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        NiveauScolaire::create(["nom" => "1ère primaire"]);
        NiveauScolaire::create(["nom" => "2ème primaire"]);
        NiveauScolaire::create(["nom" => "3ème primaire"]);
        NiveauScolaire::create(["nom" => "4ème primaire"]);
        NiveauScolaire::create(["nom" => "5ème primaire"]);

        Etudiant::factory(20)->create();
    }
}
