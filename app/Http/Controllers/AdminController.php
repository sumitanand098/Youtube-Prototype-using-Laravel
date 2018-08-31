<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\User;

use App\AddVideo;

use DB;

use Validator;


class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.content')->with('page' , "dashboar")->with('sub', "dash");
    }

    /**
     * Function: users_create()
     *
     * @uses 
     *
     * @created Sumit Anand
     *
     * @edited 
     *
     * @param -
     *
     * @return view page
     */

    public function users_create() {
        return view('admin.users.create')->with('page', "users")->with('sub', "create");
    }

    /**
     * Function: users_edit()
     *
     * @uses 
     *
     * @created Sumit Anand
     *
     * @edited 
     *
     * @param -
     *
     * @return view page
     */

    public function users_edit(Request $request) {
        $data = User::find($request->id);
        return view('admin.users.edit')->with('page', "users")->with('sub', "edit")->with('data' , $data);
    }

    /**
     * Function: edit_users()
     *
     * @uses 
     *
     * @created Sumit Anand
     *
     * @edited 
     *
     * @param -
     *
     * @return view page
     */

    public function edit_users(Request $request) {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'email' => 'required|max:255',
                'name' => 'required',
            ]);

            $file = $request->input('image');
            $base_path = '/images/'.$file;

            $data = User::find($request->id);
            $data->name = $request->name;
            $data->email = $request->email;
            $data->image = $base_path;
            $data->save();

        }

        $data = DB::table('users')->get();

        return view('admin/users/index', ['data' => $data])->with('page', "users")->with('sub', "view");
    }


    /**
     * Function: users_view()
     *
     * @uses 
     *
     * @created Sumit Anand
     *
     * @edited 
     *
     * @param -
     *
     * @return view page
     */

    public function users_view($id) {
        $data = DB::table('users')->where('id', $id)->get();
        return view('admin.users.view', ['data' => $data])->with('page', "users")->with('sub', "view");
    }

    /**
     * Function: users_index()
     *
     * @uses 
     *
     * @created Sumit Anand
     *
     * @edited 
     *
     * @param -
     *
     * @return view page
     */ 

    public function users_index(Request $request) {
        $data = DB::table('users')->get();
        return view('admin.users.index', ['data' => $data])->with('page', "users")->with('sub', "index");
    }

    /**
     * Function: users_delete()
     *
     * @uses 
     *
     * @created Sumit Anand
     *
     * @edited 
     *
     * @param -
     *
     * @return view page
     */

    public function users_delete($id) {
        DB::delete('delete from users where id = ?',[$id]);
        $data = DB::table('users')->get();

        return view('admin.users.index', ['data' => $data])->with('page', "users")->with('sub', "delete");
    }

    /**
     * Function: videos_index()
     *
     * @uses 
     *
     * @created Sumit Anand
     *
     * @edited 
     *
     * @param -
     *
     * @return view page
     */

    public function videos_index() {
        $data = DB::table('addvideo')->get();
        return view('admin.videos.index', ['data' => $data])->with('page', "videos")->with('sub', "index");
    }

    /**
     * Function: videos_create()
     *
     * @uses 
     *
     * @created Sumit Anand
     *
     * @edited 
     *
     * @param -
     *
     * @return view page
     */

    public function videos_create() {
        return view('admin.videos.create')->with('page', "videos")->with('sub', "create");
    }

     /**
     * Function: videos_view()
     *
     * @uses 
     *
     * @created Sumit Anand
     *
     * @edited 
     *
     * @param -
     *
     * @return view page
     */

    public function videos_view($id) {
        $data = DB::table('addvideo')->where('id', $id)->get();
        return view('admin.videos.view', ['data' => $data])->with('page', "videos")->with('sub', "view");
    }

     /**
     * Function: videos_edit()
     *
     * @uses 
     *
     * @created Sumit Anand
     *
     * @edited 
     *
     * @param -
     *
     * @return view page
     */

    public function videos_edit(Request $request) {
        $data = AddVideo::find($request->id);
        return view('admin.videos.edit')->with('page', "videos")->with('sub', "edit")->with('data' , $data);
    }

    /**
     * Function: edit_videos()
     *
     * @uses 
     *
     * @created Sumit Anand
     *
     * @edited 
     *
     * @param -
     *
     * @return view page
     */

    public function edit_videos(Request $request) {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'video_name' => 'required',
                'image' => 'required',
                'video' => 'required',
            ]);

            $file = $request->input('image');
            $base_path = "http://";
            $base_path .=$_SERVER["SERVER_NAME"].'/images/'.$file;
            
            $file1 = $request->input('video');
            $base_path1 = "http://";
            $base_path1 .=$_SERVER["SERVER_NAME"].'/video/'.$file1;

            $data = AddVideo::find($request->id);
            $data->video_name = $request->video_name;
            $data->description = $request->description;
            $data->image = $base_path;
            $data->video = $base_path1;
            $data->save();

        }

        $data = DB::table('addvideo')->get();

        return view('admin/videos/index', ['data' => $data])->with('page', "videos")->with('sub', "view");
    }

    /**
     * Function: videos_delete()
     *
     * @uses 
     *
     * @created Sumit Anand
     *
     * @edited 
     *
     * @param -
     *
     * @return view page
     */

    public function videos_delete($id) {
        DB::delete('delete from addvideo where id = ?',[$id]);
        $data = DB::table('addvideo')->get();

        return view('admin.videos.index', ['data' => $data])->with('page', "videos")->with('sub', "delete");
    }


    /**
     * Function: web_edit()
     *
     * @uses 
     *
     * @created Sumit Anand
     *
     * @edited 
     *
     * @param -
     *
     * @return view page
     */

    public function web_edit() {
        return view('admin.web.edit')->with('page', "web")->with('sub', "edit");
    }

    /**
     * Function: web_index()
     *
     * @uses 
     *
     * @created Sumit Anand
     *
     * @edited 
     *
     * @param -
     *
     * @return view page
     */

    public function edit_web() {
        
        return view('admin.web.index', ['data' => $data])->with('page', "web")->with('sub', "index");
    }

    /**
     * Function: web_index()
     *
     * @uses 
     *
     * @created Sumit Anand
     *
     * @edited 
     *
     * @param -
     *
     * @return view page
     */

    public function web_index() {
        $data = DB::table('web')->get();
        return view('admin.web.index', ['data' => $data])->with('page', "web")->with('sub', "index");
    }

    /**
     * Function: admin_edit()
     *
     * @uses 
     *
     * @created Sumit Anand
     *
     * @edited 
     *
     * @param -
     *
     * @return view page
     */

    public function admin_edit() {
        return view('admin.admin.edit')->with('page', "admin")->with('sub', "edit");
    }

    /**
     * Function: admin_view()
     *
     * @uses 
     *
     * @created Sumit Anand
     *
     * @edited 
     *
     * @param -
     *
     * @return view page
     */

    public function admin_view() {
        return view('admin.admin.view')->with('page', "admin")->with('sub', "view");
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        return view('admin.admin.view')->with('page', "users")->with('sub', "view");
    }

}
