<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function index()
    {
        $allAdmission = Admission::all();

        return view('Admin.Admission.view_admissions')->with("allAdmission", $allAdmission);
    }
}
