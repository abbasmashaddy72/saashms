<?php

namespace Database\Seeders;

use App\Models\HospitalSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class HospitalScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

        for ($i = 1; $i <= 2; $i++) {
            foreach ($days as $day) {
                HospitalSchedule::create([
                    'day' => $day,
                    'start_time' => fake()->time('H:i:s', $max = '12:0:0'),
                    'end_time' => fake()->time('H:i:s', $max = '24:0:0'),
                    'branch_id' => $i
                ]);
            }
        }
    }
}
