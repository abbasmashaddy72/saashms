<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Module>
 */
class ModuleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' =>  fake()->name(),
            'status' => Arr::random([0, 1]),
            'changed_by' => User::pluck('id')[fake()->numberBetween(1, User::count() - 1)],
        ];
    }
}
