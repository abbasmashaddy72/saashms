<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Doctors');
    }

    public function index()
    {
        // $data1 = User::whereHas('role', function ($query) {
        //     $query->where('title', 'Doctor');
        // })->pluck('name', 'id');

        // $data = collect($data1)->map(function ($data1, $key) {
        //     return ['name' => $data1, 'id' => $key];
        // })->toArray();

        $data = User::where('id', '15')->with('area');

        print_r($data);
        exit;

        return view('backend.pages.doctors.index');
    }
}
