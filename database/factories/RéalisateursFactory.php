<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Réalisateurs;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RéalisateursFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     public function definition()
    {
        return [
            'prenom' => $this->faker->firstname(),
            'nom' => $this->faker->lastname(),

        ];
    }

}