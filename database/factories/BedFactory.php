<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bed>
 */
class BedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type' => fake()->mimeType(),
            'floor' => fake()->randomElement(['Ground', '1', '2', '3', '4', '5']),
            'count' => fake()->numberBetween(5, 50),
            'charges' => fake()->numberBetween(500, 5000),
            'prefix' => substr(fake()->mimeType(), 0, 2),
        ];
    }
}
