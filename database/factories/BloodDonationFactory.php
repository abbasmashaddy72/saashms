<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BloodDonation>
 */
class BloodDonationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users = User::whereHas('role', function ($query) {
            $query->where('title', 'Patient');
        })->pluck('id')->toArray();

        return [
            'donated_patient_id' => fake()->randomElement($users),
            'count' => fake()->numberBetween(1, 2),
            'collected_on' => fake()->dateTimeBetween('2012-01-01', '2022-12-31')->format('Y-m-d'),
        ];
    }
}
