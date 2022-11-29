<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\TadbeerWelcomeVideo;
use App\Models\NewsEvent;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Mail\ContactMail;
use App\Models\Program;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function home()
    {
        $homeSlider = Slider::all();
        $welcomeVideos = TadbeerWelcomeVideo::all();
        $newsEvents = NewsEvent::orderBy('id','DESC')->take(3)->get();
        return view('Frontend.Page.home', compact('homeSlider','welcomeVideos','newsEvents'));
    }

    public function eventsNews()
    {
        $newsEvents = NewsEvent::orderBy('id','DESC')->get();
        return view('Frontend.Page.news_events', compact('newsEvents'));
    }

    public function apply(Request $request)
    {
        $user = User::create([
            'email' => $request->email,
            'name' => $request->student_name,
            'password' => Hash::make(123123123),
            'role' => 'student',
        ]);
        $applyOnline = Student::create([
            'user_id' => $user->id,
            'father_name' => $request->father_name,
            'date_of_birth' => $request->date_of_birth,
            'cnic_no' => $request->cnic_no,
            'parmanent_address' => $request->address,
            'madrassah_total_marks' => $request->total_marks,
            'madrassah_obtained_marks' => $request->obtained_marks,
            'madrassah_percentage' => $request->percentage,
            'madrassah_name' => $request->madrassah,
            'madrassah_board' => $request->board,
            'bachelors_obtained_marks' => $request->backelors_obtained_marks,
            'bachelors_percentage' => $request->bachelors_percentage,
            'bachelors_university' => $request->board_university_name,
            'master_obtained_marks' => $request->master_obtained_marks,
            'master_percentage' => $request->master_percentage,
            'master_university_name' => $request->university_name,
            'optional_skill' => $request->optional,
            'optional_expert' => $request->optional_expert,
            'question_1' => $request->question_1,
            'question_2' => $request->question_2,
            'question_3' => $request->question_3,
            'question_4' => $request->question_4,
            'question_5' => $request->question_5,
        ]);

        return redirect()->back()->with('message', 'Registered Successfully!');
    }

    // public function sendemail(Request $request)
    // {

    //     $subject = 'Mail from Tadbeer';
    //     $data = array(
    //         'name'=>$request->name,
    //         'email'=>$request->email,
    //         'mobile_no'=>$request->mobile_no,
    //         'message'=>$request->message,
    //     );
    //     $email = 'mhrabid558@gmail.com';
    //     Mail::send('emails.contactmail', $data, function ($message) use ($email, $subject) {
    //         $message->to($email)->subject($subject);
    //     });
    //     return redirect()->back()->with('message', 'Mail Sent Successfully!');
    // }

    public function sendemail(Request $request)
    {
        $create = ContactMessage::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile_no'=>$request->mobile_no,
            'message'=>$request->message,
            'status' => 1,
        ]);
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile_no'=>$request->mobile_no,
            'message'=>$request->message,
        ];

        Mail::to('mhrabid558@gmail.com')->send(new ContactMail($data));

        return redirect()->back()->with('message', 'Your message sent successfully!');
    }

    public function viewmails()
    {
        return view('emails.contactmail');
    }

    public function programs()
    {
        $programs = Program::orderBy('id','DESC')->get();
        return view('Frontend.Page.programs', compact('programs'));
    }

}
