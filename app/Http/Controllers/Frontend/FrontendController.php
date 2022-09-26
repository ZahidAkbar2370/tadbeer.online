<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\TadbeerWelcomeVideo;
use App\Models\NewsEvent;

class FrontendController extends Controller
{
    public function home()
    {
        $homeSlider = Slider::all();
        $welcomeVideos = TadbeerWelcomeVideo::all();
        $newsEvents = NewsEvent::all();
        return view('Frontend.Page.home', compact('homeSlider','welcomeVideos','newsEvents'));
    }
}
