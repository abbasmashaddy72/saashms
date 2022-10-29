<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Area>
 */
class AreaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'city_id' => City::pluck('id')[fake()->numberBetween(1, City::count() - 1)],
            'name' => fake()->name(),
            'zip_code' => fake()->unique()->numberBetween(100000, 999999)
        ];
    }
}
