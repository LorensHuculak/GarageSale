<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {   

        
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    { 
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'profile_image' => 'image|nullable|max:1999'
        ]);

        // Handle file upload

        if($request->hasFile('profile_image')){
            // Get filename with extension
            $filenameWithExt = $request->file('profile_image')->getClientOriginalName();
            // Get filename
            $filename = pathInfo($filenameWithExt, PATHINFO_FILENAME);
            // Get extension
            $fileExt = $request->file('profile_image')->getClientOriginalExtension();
            // Filename to store
            $filenameToStore = $filename.'_'.time().'.'.$fileExt;
            // Upload Image
            $path = $request->file('profile_image')->storeAs('public/profile_images', $filenameToStore);
        } 

        // Update User

        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        if($request->hasFile('profile_image')){
            $user->profile_image = $filenameToStore;
        }
        $user->save();
        
        return redirect("/users/$user->id")->with('success', 'Profile Edited');
    }
}