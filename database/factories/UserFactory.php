<?php

namespace Database\Factories;

use App\Models\Area;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'branch_id' => Arr::random([1, 2]),
            'status' => fake()->boolean(),
            'gender' => fake()->randomElement(['Male', 'FeMale', 'Trans']),
            'dob' => fake()->dateTimeBetween('1990-01-01', '2012-12-31')->format('Y-m-d'),
            'qualification' => fake()->jobTitle(),
            'designation' => fake()->jobTitle(),
            'blood_group' => fake()->randomElement(['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-']),
            'contact_no' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'about' => fake()->realText(),
            'area_id' => Area::pluck('id')[fake()->numberBetween(1, Area::count() - 1)],
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
