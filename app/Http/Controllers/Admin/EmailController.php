<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index()
    {
        $allEmails = Email::all();

        return view('Admin.Message.sent_emails')->with("allEmails", $allEmails);
    }
}
