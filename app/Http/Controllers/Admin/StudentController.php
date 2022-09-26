<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function viewStudents()
    {
        $Students = Student::all();
        return view('Admin.Student.view_students', compact('Students'));
    }
}
