<?php

namespace Database\Seeders;

use App\Models\OpdPatient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OpdPatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OpdPatient::factory()->count(100, 500)->create();
    }
}
