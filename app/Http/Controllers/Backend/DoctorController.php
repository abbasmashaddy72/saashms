<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BloodIssue;
use App\Models\OpdPatient;

class DoctorController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Doctors');
    }

    public function index()
    {
        // $data = BloodIssue::with(['issued_patient', 'doctor', 'blood_donation'])->get();
        // echo $data;
        // exit;

        return view('backend.pages.doctors.index');
    }
}
