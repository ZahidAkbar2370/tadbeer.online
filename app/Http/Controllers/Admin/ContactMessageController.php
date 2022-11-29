<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function index()
    {
        $allContactMessages = ContactMessage::all();

        return view('Admin.Message.view_contact_messages')->with("allContactMessages", $allContactMessages);
    }
}
