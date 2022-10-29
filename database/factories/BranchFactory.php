<?php

namespace Database\Factories;

use App\Models\Area;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Branch>
 */
class BranchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'area_id' => Area::pluck('id')[fake()->numberBetween(1, Area::count() - 1)],
            'address' => 'Flat No.' . fake()->numberBetween(0, 214),
            'landmark' => fake()->company(),
            'manager_name' => fake()->name(),
            'manager_contact_no' => fake()->phoneNumber(),
            'manager_email' => fake()->email(),
            'branch_number' => fake()->phoneNumber()
        ];
    }
}
