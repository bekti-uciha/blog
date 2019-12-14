<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view ('auth.profile');
    }
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name'              =>  'required',
            'profile_image'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $user = User::find0rFail(auth()->user()->id);
        $user->name = $request->input('name');

        if ($request->has('profile_image')) {
            $image = $request->file('profile_image');
            $folder = '/uploads/images';
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            $this->profile_image = $filePath;
        }

        $user->save();
        return redirect()->back()->with(['status' => 'Profile updated successfull.']);
    }
}
