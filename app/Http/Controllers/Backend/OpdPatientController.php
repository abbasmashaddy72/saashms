<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class OpdPatientController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'OPD Patients');
    }

    public function index()
    {
        return view('backend.pages.opd-patients.index');
    }
}
