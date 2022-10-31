<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Patients');
    }

    public function index()
    {
        return view('backend.pages.patients.index');
    }
}
