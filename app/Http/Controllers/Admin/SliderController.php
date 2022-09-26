<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class SliderController extends Controller
{
    public function index()
    {
        $allSliders = Slider::all();

        return view('Admin.Slider.view_sliders')->with("allSliders", $allSliders);
    }

    public function createSlider(Request $request)
    {
        $slider = Slider::create([
        "slider_text" => $request->slider_text,
        "button_text" => $request->button_text,
        "button_url" => $request->button_url,
        "image_url" => $request->image_url,
        "publication_status" => '1',

        ]);
        return redirect('admin/view-sliders');
        Session::flash('message', 'Slider Created Successfully!');
    }

    public function activateSlider($id)
    {
        $activateSlider = Slider::find($id);
        $activateSlider->publication_status = '1';
        $activateSlider->update();
        return back();
        Session::flash('message', 'Slider Activated Successfully!');
    }

    public function inActivateSlider($id)
    {
        $inActivateSlider = Slider::find($id);
        $inActivateSlider->publication_status = '0';
        $inActivateSlider->update();
        return back();
        Session::flash('message', 'Slider inActivated Successfully!');
    }

    public function deleteSlider($id)
    {
        $deleteSlider = Slider::find($id);
        $deleteSlider->delete();
        return back();
        Session::flash('message', 'Slider deleted Successfully!');
    }

    public function editSlider($id)
    {
        $editSlider = Slider::find($id);
        return view('Admin.Slider.edit_slider', compact('editSlider'));
    }

    public function updateSlider(Request $request, $id)
    {
        $updateSlider = Slider::find($id);
        $updateSlider->slider_text = $request->slider_text;
        $updateSlider->button_text = $request->button_text;
        $updateSlider->button_url = $request->button_url;
        $updateSlider->image_url = $request->image_url;
        $updateSlider->update();

        return redirect('admin/view-sliders');
        Session::flash('message', 'Slider Updated Successfully!');
    }
}
