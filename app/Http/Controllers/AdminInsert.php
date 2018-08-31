<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\AddVideo;

use App\User;

use DB;

class AdminInsert extends Controller
{


// add video name, description, picture and image

    public function videos_add(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'video_name' => 'required',
                'image' => 'required',
                'video' => 'required',
            ]);

            $file1 = $request->input('image');
            $file2 = $request->input('video');
            $base_image_path ='/images/'.$file1;
            $base_video_path ='/videos/'.$file2;
            AddVideo::create([
                'video_name' => $request->get('video_name'),
                'description' => $request->get('description'),
                'image' => $base_image_path,
                'video' => $base_video_path,
            ]);
        }

        $data = DB::table('addvideo')->get();

        return view('admin.videos.index', ['data' => $data])->with('page', "videos")->with('sub', "create");
    }


//add user name, mail id and pw
    public function users_add(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'email' => 'required|max:255',
                'name' => 'required',
                'password' => 'required',
                'image' => 'required',
            ]);

            $file = $request->input('image');
            $base_path = '/images/'.$file;
            User::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => bcrypt($request->get('password')),
                'image' => $base_path,
            ]);
        }

        $data = DB::table('users')->get();

        return view('admin.users.index', ['data' => $data])->with('page', "users")->with('sub', "create");
    }
}
