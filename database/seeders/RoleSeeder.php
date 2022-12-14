<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['Admin', 'Nurse', 'Doctor', 'Reception', 'Employee', 'Patient'];

        foreach ($data as $item) {
            $data = Role::create(['title' => $item]);
            if ($item == 'Admin') {
                $see = $data->permissions()->sync(Permission::all());
            } elseif ($item == 'Nurse') {
                array_diff($data->permissions()->sync(Permission::inRandomOrder()->limit(rand(0, count(Permission::all())))->get()));
            } elseif ($item == 'Doctor') {
                array_diff($data->permissions()->sync(Permission::inRandomOrder()->limit(rand(0, count(Permission::all())))->get()));
            } elseif ($item == 'Reception') {
                array_diff($data->permissions()->sync(Permission::inRandomOrder()->limit(rand(0, count(Permission::all())))->get()));
            } elseif ($item == 'Patient') {
                array_diff($data->permissions()->sync(Permission::inRandomOrder()->limit(rand(0, count(Permission::all())))->get()));
            } else {
                array_diff($data->permissions()->sync(Permission::inRandomOrder()->limit(rand(0, count(Permission::all())))->get()));
            }
        }
    }
}
