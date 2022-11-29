<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function viewStudents()
    {
        $Students = Student::all();
        return view('Admin.Student.view_students', compact('Students'));
    }

    public function deletestudent($id)
    {
        $deletestudent = Student::find($id);
        $user = User::where('id', $deletestudent->user_id)->first();
        $user->delete();
        $deletestudent->delete();
        return redirect()->back()->with('message', 'Student deleted Successfully');
    }
}
