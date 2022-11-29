<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestUserMail;

class MailController extends Controller
{
    public function groupmail()
    {
        $users = User::select('*')
                        ->orderBy('id','DESC')
                        ->paginate(10);

        return view('Admin.mail.groupmail', compact('users'));
    }

    // public function sendMail(Request $request)
    // {
    //     $users = User::whereIn('id',$request->ids)->get();

    //     if ($users->count() > 0) {
    //         foreach($users as $key => $value){
    //             if (!empty($value->email)) {
    //                 $details = [
    //                   'subject' => 'Mail From Tadbeer',
    //                 ];

    //                 Mail::to($value->email)->send(new TestUserMail($details));
    //             }
    //         }
    //     }

    //     return response()->json(['done']);
    // }

    public function singlemail()
    {
        return view('Admin.mail.singlemail');
    }
}
