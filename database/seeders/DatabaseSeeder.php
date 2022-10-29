<?php

namespace Database\Seeders;

ini_set('memory_limit', -1);

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(PermissionSeeder::class);
        // $this->call(RoleSeeder::class);
        // $this->call(CountrySeeder::class);
        // $this->call(StateSeeder::class);
        // $this->call(CitySeeder::class);
        // $this->call(AreaSeeder::class);
        // $this->call(BranchSeeder::class);
        // $this->call(UserSeeder::class);
        // $this->call(RoleUserSeeder::class);
        $this->call(HospitalScheduleSeeder::class);
    }
}
