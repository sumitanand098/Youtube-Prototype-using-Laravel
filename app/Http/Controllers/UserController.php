<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Auth;

use DB;

class UserController extends Controller
{
    /**
     * Function: users_home()
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

    public function users_home() {
        $data = DB::table('addvideo')->get();
        return view('users.home', ['data' => $data])->with('page', "home");
    }

    /**
     * Function: users_profile()
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

    public function users_profile(Request $request) {
        $data = User::find(Auth::user()->id);
        return view('users.profile', ['data' => $data])->with('page', "profile");
    }

    /**
     * Function: users_broadcast()
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

    public function users_broadcast() {
        return view('users.broadcast')->with('page', "broadcast");
    }

    /**
     * Function: users_signup()
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

    public function users_signup() {
        return view('users.signup')->with('page', "users");
    }

    /**
     * Function: user_add()
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

    public function user_add(Request $request)
    {
        if ($request->isMethod('post')) {

            $file = $request->input('image');
            $base_path = '/images/'.$file;
            User::create([
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'email' => $request->get('email'),
                'password' => bcrypt($request->get('password')),
                'image' => $base_path,
            ]);
        }

        return view('users.profile')->with('page', "home");
    }

    /**
     * Function: users_signin()
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

    public function users_signin() {
        return view('users.signin');
    }

    public function singlevideo($id){
        // dd($id);
        $data = DB::table('addvideo')->where('id', $id)->get();
        return view('users.singlevideo', ['data' => $data])->with('page', "users");   
    }

    public function edit_users(Request $request) {
        dd($request);
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => 'required',
                'email' => 'required',
            ]);

            $file = $request->input('image');
            $base_path = '/images/'.$file;

            $data = User::find($request->id);
            $data->name = $request->name;
            $data->email = $request->email;
            $data->image = $base_path;
            $data->save();

        }

        return view('user.profile')->with('page', "users");
    }

}
