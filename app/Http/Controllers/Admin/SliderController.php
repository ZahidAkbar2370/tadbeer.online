<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $allSliders = Slider::all();

        return view('Admin.Slider.view_sliders')->with("allSliders", $allSliders);
    }
}
