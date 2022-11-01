<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\IpdPatient>
 */
class OpdPatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $doctors = User::whereHas('role', function ($query) {
            $query->where('title', 'Doctor');
        })->pluck('id')->toArray();

        $patients = User::whereHas('role', function ($query) {
            $query->where('title', 'Patient');
        })->pluck('id')->toArray();

        return [
            'patient_id' => Arr::random($patients),
            'doctor_id' => Arr::random($doctors),
            'date' => fake()->dateTimeBetween('2021-01-01', '2023-01-31')->format('Y-m-d'),
            'time' => fake()->dateTimeBetween('00:00:00', '20:00:00'),
            'description' => fake()->realText(),
        ];
    }
}
