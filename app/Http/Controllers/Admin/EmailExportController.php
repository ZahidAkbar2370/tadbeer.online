<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EmailExportController extends Controller
{
    public function index()
    {
        $allUserEmails = User::all();

        return view('Admin.EmailExport.view_email_export')->with("allUserEmails", $allUserEmails);
    }
}
