<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UploadController extends Controller
{
    public function upload(Request $request)
    {

        $data = $request->file('file');
        $data->move('upload', $data->getClientOriginalName());
        $data_name = $data->getClientOriginalName();

        $video = new Video();
        $video->video = $data_name;
        $video->save();
        return redirect()->route('index');
    }

    public function index()
    {
        $data = DB::table('video')->get();
        return view('index', compact('data'));
    }
}
