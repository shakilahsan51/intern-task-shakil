<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::with('user')->get();
        return view('profile.index', compact('profiles'));
    }

    public function show(Profile $profile)
    {
        return view('profile.show', compact('profile'));
    }



    public function showForm()
    {
        return view('profile.create');
    }


    
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:profiles,email',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'bio' => 'nullable|string',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'hobbies' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
        ]);

        $imagePath = null;
        if ($request->hasFile('profile_image')) {
            $imagePath = $request->file('profile_image')->store('profiles', 'public');
        }

        Profile::create([
            'user_id' => Auth::id(),
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'bio' => $request->bio,
            'profile_image' => $imagePath,
            'hobbies' => $request->hobbies,
            'date_of_birth' => $request->date_of_birth,
        ]);

        return redirect()->route('dashboard')->with('success', 'Profile created successfully!');
    }
}
