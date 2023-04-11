<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom" => $this->faker->name(),
            "prenom" => $this->faker->firstName(),
            "sex" => ["Garcon","Fille"][rand(0,1)],
            "age" => rand(6,18),
            "niveau_scolaire_id" => rand(1,5),
        ];
    }
}
