<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TadbeerWelcomeVideo;

class WelcomeVideoController extends Controller
{
    public function index()
    {
        return view('Admin.welcomevideos.index');
    }

    public function createVideo(Request $request)
    {
        $createVideo = TadbeerWelcomeVideo::create([
            'title' => $request->title,
            'short_introduction' => $request->short_intro,
            'video_url' => $request->video_url,
            'image_url' => $request->image_url,
        ]);

        return redirect('admin/view-videos');
    }

    public function viewVideos()
    {
        $viewVideos = TadbeerWelcomeVideo::orderBy('id', 'DESC')->get();
        return view('Admin.welcomevideos.view', compact('viewVideos'));
    }

    public function deleteVideo($id)
    {
        $deleteVideo = TadbeerWelcomeVideo::find($id)
                                            ->delete();
        return redirect()->back();

    }

    public function editVideo($id)
    {
        $editVideo = TadbeerWelcomeVideo::find($id);
        return view('Admin.welcomevideos.edit', compact('editVideo'));
    }

    public function updateVideo(Request $request, $id)
    {
        $updateVideo = TadbeerWelcomeVideo::find($id);
        $updateVideo->title = $request->title;
        $updateVideo->short_introduction = $request->short_intro;
        $updateVideo->video_url = $request->video_url;
        $updateVideo->image_url = $request->image_url;

        return redirect('admin/view-videos');
    }

}
