<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsEvent;
use Illuminate\Http\Request;

class NewsEventController extends Controller
{
    public function index()
    {
        $allNewsUpdates = NewsEvent::all();

        return view('Admin.NewsAndUpdate.view_news_and_updates')->with("allNewsUpdates", $allNewsUpdates);
    }
}
