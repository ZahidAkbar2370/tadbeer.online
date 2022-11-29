<?php

use App\Http\Controllers\Admin\AdmissionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\NewsEventController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Admin\WelcomeVideoController;
Use App\Http\Controllers\Admin\MailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [FrontendController::class, 'home']);

Route::get('apply-online', function () {
    return view('Frontend.Registration.apply_form');
});

Route::post('apply', [FrontendController::class, 'apply']);

Route::get('merit-list', function () {
    return view('Frontend.Page.merit_list');
});

Route::get('contact-us', function () {
    return view('Frontend.Page.contact_us');
});
Route::get('programs', [FrontendController::class, 'programs']);

Route::get('events-and-news', [FrontendController::class, 'eventsNews']);
Route::post('contactus',[FrontendController::class, 'sendemail']);


Route::group(["prefix" => 'admin'], function(){
    Route::get('dashboard', function () {
        return view('Admin.Dashboard.dashboard');
    });

    //User
    Route::get('view-users', [UserController::class, 'viewUser']);
    Route::get('add-user', [UserController::class, 'addUser']);
    Route::post('create-user',[UserController::class, 'createUser']);
    Route::get('delete-user/{id}', [UserController::class, 'deleteUser']);
    Route::get('edit-user/{id}', [UserController::class, 'editUser']);
    Route::post('update-user/{id}', [UserController::class, 'updateUser']);

    //Registraions
    Route::get('view-registrations', [StudentController::class, 'viewStudents']);
    Route::get('delete-student/{id}', [StudentController::class, 'deletestudent']);
    //Admissions
    Route::get('view-admissions', [AdmissionController::class, 'viewAdmissions']);
    Route::get('add-admission', [AdmissionController::class, 'addAdmission']);
    Route::post('create-admission', [AdmissionController::class, 'createAdmission']);
    Route::get('delete-admission/{id}', [AdmissionController::class, 'deleteAdmission']);
    //Slider

    Route::get("view-sliders","App\Http\Controllers\Admin\SliderController@index");

    Route::get('add-slider', function () {
        return view('Admin.Slider.add_slider');
    });

    Route::post('create-slider', [SliderController::class, 'createSlider']);
    Route::get('active-slider/{id}', [SliderController::class, 'activateSlider']);
    Route::get('inactive-slider/{id}', [SliderController::class, 'inActivateSlider']);
    Route::get('delete-slider/{id}', [SliderController::class, 'deleteSlider']);
    Route::get('edit-slider/{id}', [SliderController::class, 'editSlider']);
    Route::post('update-slider/{id}', [SliderController::class, 'updateSlider']);

    //News & Updates
    Route::get("view-news-and-updates",[NewsEventController::class,"index"]);

    Route::get('add-news-and-update', function () {
        return view('Admin.NewsAndUpdate.add_news_and_update');
    });

    Route::post('create-news&update', [NewsEventController::class, 'createNewsUpdates']);
    Route::get('inactive-news-update/{id}', [NewsEventController::class, 'inactiveNews']);
    Route::get('active-news-update/{id}', [NewsEventController::class, 'activeNews']);
    Route::get('delete-news-update/{id}', [NewsEventController::class, 'deleteNews']);
    Route::get('edit-news-update/{id}', [NewsEventController::class, 'editNews']);

    //Programs
    Route::get('add-program', [ProgramController::class, 'program']);
    Route::get('view-programs', [ProgramController::class, 'viewPrograms']);
    Route::post('create-program', [ProgramController::class, 'createProgram']);
    Route::get('inactive-program/{id}', [ProgramController::class, 'inactiveProgram']);
    Route::get('active-program/{id}', [ProgramController::class, 'activeProgram']);
    Route::get('delete-program/{id}', [ProgramController::class, 'deleteProgram']);
    Route::get('edit-program/{id}', [ProgramController::class, 'editProgram']);
    Route::post('update-program/{id}', [ProgramController::class, 'updateProgram']);
    Route::get("view-contact-messages","App\Http\Controllers\Admin\ContactMessageController@index");
    Route::get("view-sent-email","App\Http\Controllers\Admin\EmailController@index");
    Route::get("view-email-export","App\Http\Controllers\Admin\EmailExportController@index");
    Route::get("view-mobile-no-export","App\Http\Controllers\Admin\MobileNoExportController@index");
    Route::get("database-export","App\Http\Controllers\Admin\DatabaseExportController@export");

    // welcome videos
    Route::get('add-welcomevideo', [WelcomeVideoController::class, 'index']);
    Route::get('view-videos', [WelcomeVideoController::class, 'viewVideos']);
    Route::post('create-video', [WelcomeVideoController::class, 'createVideo']);
    Route::get('delete-videos/{id}', [WelcomeVideoController::class, 'deleteVideo']);
    Route::get('edit-video/{id}', [WelcomeVideoController::class, 'editVideo']);
    Route::post('update-video/{id}', [WelcomeVideoController::class, 'updateVideo']);


    // Route::get('groupmail', function(){
    //     return view('Admin.mail.groupmail');
    // });

    // Route::get('groupmail', [MailController::class, 'groupmail']);
    // Route::post('send-mail', [MailController::class, 'sendMail'])->name('send.mail');
    // Route::get('singlemail', [MailController::class, 'singlemail']);
});
