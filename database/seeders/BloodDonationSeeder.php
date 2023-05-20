<?php

namespace Database\Seeders;

use App\Models\BloodDonation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BloodDonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BloodDonation::factory()->count(10, 50)->create();
    }
}
