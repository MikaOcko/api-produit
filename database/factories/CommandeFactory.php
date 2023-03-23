<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commande>
 */
class CommandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_client' => fake()->numberBetween(1, 50),
            'id_produit' => fake()->numberBetween(1, 50),
            'quantite' => fake()->numberBetween(100, 1000),
            'date' => now(),
        ];
    }
}
