<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

use App\Http\Requests;

class Front extends Controller
{
	public function login(){
		if (Auth::guest()){
    		return view('auth.login')->with('page' , "dashboard");
    	}
    	else
    	{
    		return redirect('/admin')->with('page' , "dashboard")->with('sub' , "dashboard");
    	}
    }
}
