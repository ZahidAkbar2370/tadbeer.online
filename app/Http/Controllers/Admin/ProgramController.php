<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class ProgramController extends Controller
{
    public function viewPrograms()
    {
        $allPrograms = Program::all();

        return view('Admin.Program.view_programs')->with("allPrograms", $allPrograms);
    }

    public function program()
    {
        return view('Admin.Program.add_program');
    }

    public function createProgram(Request $request)
    {
        $createProgram = Program::create([
            'program_name' => $request->program_name,
            'duration' => $request->duration,
            'image_url' => $request->image_url,
        ]);

        return redirect('admin/view-programs');
        Session::flash('message', 'Program Created Successfully!');
    }

    public function inactiveProgram($id)
    {
        $inactiveProgram = Program::find($id);
        $inactiveProgram->publication_status = '0';
        $inactiveProgram->update();
        return back();
        Session::flash('message', 'Program inActivate Successfully!');
    }

    public function activeProgram($id)
    {
        $activeProgram = Program::find($id);
        $activeProgram->publication_status = '1';
        $activeProgram->update();
        return back();
        Session::flash('message', 'Program Activate Successfully!');
    }

    public function deleteProgram($id)
    {
        $deleteProgram = Program::find($id);
        $deleteProgram->delete();
        return back();
        Session::flash('message', 'Program deleted Successfully!');
    }

    public function editProgram($id)
    {
        $editProgram = Program::find($id);
        return view('Admin.Program.edit_program', compact('editProgram'));
    }

    public function updateProgram(Request $request, $id)
    {
        $updateProgram = Program::find($id);
        $updateProgram->program_name = $request->program_name;
        $updateProgram->duration = $request->duration;
        $updateProgram->image_url = $request->image_url;
        $updateProgram->update();
        return back();
        Session::flash('message', 'Program Updated Successfully!');

    }
}
