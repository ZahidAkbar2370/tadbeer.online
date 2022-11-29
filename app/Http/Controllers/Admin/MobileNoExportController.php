<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MobileNoExportController extends Controller
{
    public function index()
    {
        $allUserEmails = User::all();

        return view('Admin.MobileNoExport.view_mobile_no_export')->with("allUserEmails", $allUserEmails);
    }
}
