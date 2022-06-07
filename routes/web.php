<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('Frontend.Page.home');
});

Route::get('apply-online', function () {
    return view('Frontend.Registration.apply_form');
});

Route::get('merit-list', function () {
    return view('Frontend.Page.merit_list');
});

Route::get('contact-us', function () {
    return view('Frontend.Page.contact_us');
});

Route::get('programs', function () {
    return view('Frontend.Page.programs');
});

Route::get('events-and-news', function () {
    return view('Frontend.Page.news_events');
});


Route::group(["prefix" => 'admin'], function(){
    Route::get('layout', function () {
        return view('Admin.layout');
    });

    // Route::get('view-sliders', function () {
    //     return view('Admin.Slider.view_sliders');
    // });
    Route::get("view-sliders","App\Http\Controllers\Admin\SliderController@index");

    Route::get('add-slider', function () {
        return view('Admin.Slider.add_slider');
    });

    // Route::get('view-news-and-updates', function () {
    //     return view('Admin.NewsAndUpdate.view_news_and_updates');
    // });
    Route::get("view-news-and-updates","App\Http\Controllers\Admin\NewsEventController@index");
    Route::get("view-contact-messages","App\Http\Controllers\Admin\ContactMessageController@index");
    Route::get("view-sent-email","App\Http\Controllers\Admin\EmailController@index");
    Route::get("view-programs","App\Http\Controllers\Admin\ProgramController@index");
    Route::get("view-admissions","App\Http\Controllers\Admin\AdmissionController@index");
    Route::get("view-email-export","App\Http\Controllers\Admin\EmailExportController@index");
    Route::get("view-mobile-no-export","App\Http\Controllers\Admin\MobileNoExportController@index");
    Route::get("database-export","App\Http\Controllers\Admin\DatabaseExportController@export");

    Route::get('add-news-and-update', function () {
        return view('Admin.NewsAndUpdate.add_news_and_update');
    });
});