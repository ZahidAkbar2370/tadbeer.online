<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public function viewUser()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        return view('Admin.User.view_users', compact('users'));
    }

    public function addUser()
    {
        return view('Admin.User.add_user');
    }

    public function createUser(Request $request)
    {
        $createUser = User::create([
            'name' => $request->user_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        return redirect('admin/view-users');
        Session::flash('message', 'User created Successfully!');
    }

    public function deleteUser($id)
    {
        $deleteUser = User::find($id);
        $deleteUser->delete();
        return redirect()->back();
        Session::flash('message', 'User deleted Successfully!');
    }

    public function editUser($id)
    {
        $editUser = User::find($id);
        return view('Admin.User.editUser', compact('editUser'));
    }

    public function updateUser(Request $request, $id)
    {
        $updateUser = User::find($id);
        $updateUser->name = $request->user_name;
        $updateUser->email = $request->email;
        $updateUser->password = Hash::make($request->password);
        $updateUser->update();
        return redirect('admin/view-users');
        Session::flash('message', 'User Updated Susscessfully!');
    }
}
