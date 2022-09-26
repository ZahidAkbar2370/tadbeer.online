<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NewsEventController extends Controller
{
    public function index()
    {
        $allNewsUpdates = NewsEvent::all();

        return view('Admin.NewsAndUpdate.view_news_and_updates')->with("allNewsUpdates", $allNewsUpdates);
    }

    public function createNewsUpdates(Request $request)
    {
        $createNewsUpdates = NewsEvent::create([
        "title" => $request->title,
        "description" => $request->description,
        "type" => $request->type,
        "image_url" => $request->image_url,
        "publication_status" => '1',

        ]);

        return redirect('admin/view-news-and-updates');
        Session::flash('message', 'News & Updates created Successfully!');
    }

    public function inactiveNews($id)
    {
        $inactiveNews = NewsEvent::find($id);
        $inactiveNews->publication_status = '0';
        $inactiveNews->update();
        return back();
        Session::flash('message', 'News & Events inActivated Successfully!');
    }

    public function activeNews($id)
    {
        $activeNews = NewsEvent::find($id);
        $activeNews->publication_status = '1';
        $activeNews->update();
        return back();
        Session::flash('message', 'News & Events Activate Successfully!');
    }

    public function deleteNews($id)
    {
        $deleteNews = NewsEvent::find($id);
        $deleteNews->delete();
        return back();
        Session::flas('message', 'News & Events deleted Successfully!');
    }

    public function editNews($id)
    {
        $editNews = NewsEvent::find($id);
        return view('Admin.NewsAndUpdate.edit_news_and_updates', compact('editNews'));
    }
}
