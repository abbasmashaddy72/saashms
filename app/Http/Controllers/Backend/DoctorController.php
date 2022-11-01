<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\OpdPatient;

class DoctorController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Doctors');
    }

    public function index()
    {
        $data = OpdPatient::where('id', 100)->first();
        echo $data;
        exit;

        return view('backend.pages.doctors.index');
    }
}
