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
});