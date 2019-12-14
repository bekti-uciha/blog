<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('contact');
    }

    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function post()
    {
        return view('post');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function profil()
    {
        return view('profil');
    }

    public function page()
    {
        return view('page');
    }
}
