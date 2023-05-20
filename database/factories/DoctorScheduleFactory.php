<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DoctorSchedule>
 */
class DoctorScheduleFactory extends Factory
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
            'per_patient_time' => fake()->randomElement(['0', '5', '10', '15']),
            'day' => Arr::random(['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']),
            'from' => fake()->time('H:i:s', '12:0:0'),
            'till' => fake()->time('H:i:s', '24:0:0'),
        ];
    }
}
