<?php

namespace Database\Factories;

use App\Models\BloodDonation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BloodIssue>
 */
class BloodIssueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $patients = User::whereHas('role', function ($query) {
            $query->where('title', 'Patient');
        })->pluck('id')->toArray();

        $doctors = User::whereHas('role', function ($query) {
            $query->where('title', 'Doctor');
        })->pluck('id')->toArray();

        $donated = BloodDonation::all()->pluck('id')->toArray();

        return [
            'issued_patient_id' => fake()->randomElement($patients),
            'doctor_id' => fake()->randomElement($doctors),
            'blood_donation_id' => fake()->randomElement($donated),
            'amount' => fake()->numberBetween(100, 500),
            'count' => fake()->numberBetween(1, 2),
            'description' => fake()->realText(),
            'issue_date' => fake()->dateTimeBetween('2012-01-01', '2022-12-31')->format('Y-m-d'),
        ];
    }
}
