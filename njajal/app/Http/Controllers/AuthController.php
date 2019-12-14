<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function getlogin()
    {
    	return view('login');
    }

    public function postlogin(Request $request)
    {
    	dd('login ok');
    }

    public function getregister()
    {
    	return view('register');
    }

    public function postregister(Request $request)
    {
    	$this->validate($request,[
    		'name' =>'required|min:4',
    		'email' => 'required|email|unique:users',
    		'password' => 'required|min:6|confirmed' 
    	]);
    	
    	User::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => bcrypt($request->password)
    	]);

    	return redirect()->back();
    }
}
