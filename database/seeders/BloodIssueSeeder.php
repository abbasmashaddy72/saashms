<?php

namespace Database\Seeders;

use App\Models\BloodIssue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BloodIssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BloodIssue::factory()->count(10, 50)->create();
    }
}
