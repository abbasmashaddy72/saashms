<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users = User::whereHas('role', function ($query) {
            $query->where('title', 'Doctor');
        })->pluck('id')->toArray();

        return [
            'user_id' => Arr::random($users),
            'department_id' => Department::pluck('id')[fake()->numberBetween(1, Department::count() - 1)],
            'reg_no' => fake()->uuid(),
            'specialist' => fake()->jobTitle(),
            'opd_reg_fee' => fake()->numberBetween(100, 500),
            'ipd_reg_fee' => fake()->numberBetween(100, 300),
            'opd_consultation_fee' => fake()->numberBetween(800, 1500),
            'ipd_consultation_fee' => fake()->numberBetween(300, 1000),
            'fb' => fake()->url(),
            'twitter' => fake()->url(),
            'instagram' => fake()->url(),
            'gmb' => fake()->url()
        ];
    }
}
