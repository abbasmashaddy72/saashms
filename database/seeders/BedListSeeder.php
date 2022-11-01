<?php

namespace Database\Seeders;

use App\Models\Bed;
use App\Models\BedList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BedListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = Bed::count();

        BedList::factory()->count($count)->create();
    }
}
