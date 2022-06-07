<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $allPrograms = Program::all();

        return view('Admin.Program.view_programs')->with("allPrograms", $allPrograms);
    }
}
