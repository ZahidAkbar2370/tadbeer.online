<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdmissionController extends Controller
{
    public function viewAdmissions()
    {
        $allAdmission = Admission::all();

        return view('Admin.Admission.view_admissions')->with("allAdmission", $allAdmission);
    }

    public function deleteAdmission($id)
    {
        $deleteAdmission = Admission::find($id);
        $deleteAdmission->delete();
        return back();
        Session::flash('message', 'Admission deleted Successfully!');
    }

    public function addAdmission()
    {
        return view('Admin.Admission.add_admission');
    }

    public function createAdmission(Request $request)
    {
        $createAdmission = Admission::create([
            'title' => $request->title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'image_url' => $request->image_url,
        ]);
        return redirect('admin/view-admissions');
        Session::flash('message', 'Admission Created Successfully!');
    }
}
