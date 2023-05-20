<?php

namespace Database\Seeders;

use App\Models\DoctorSchedule;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::whereHas('role', function ($query) {
            $query->where('title', 'Doctor');
        })->count();

        DoctorSchedule::factory()->count($users)->create();
    }
}
