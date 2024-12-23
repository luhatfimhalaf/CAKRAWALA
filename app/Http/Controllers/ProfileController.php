<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Display a listing of profiles
    public function index()
    {
        return view('profile'); // Pastikan file `profile.blade.php` ada di folder `resources/views/`
    }


    // Store a newly created profile in storage
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'image_path' => 'nullable|string',
        ]);

        $profile = Profile::create($validatedData);

        return response()->json(['message' => 'Profile created successfully', 'profile' => $profile], 201);
    }

    // Display the specified profile
    public function show($id)
    {
        $profile = Profile::findOrFail($id);
        dd($profile); // Ini akan menghentikan eksekusi dan menampilkan data profile
        return view('profile', compact('profile'));
    }




    // Update the specified profile in storage
    public function update(Request $request, $id)
    {
        $profile = Profile::find($id);

        if (!$profile) {
            return response()->json(['message' => 'Profile not found'], 404);
        }

        $validatedData = $request->validate([
            'user_id' => 'integer',
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'bio' => 'nullable|string',
            'image_path' => 'nullable|string',
        ]);

        $profile->update($validatedData);

        return response()->json(['message' => 'Profile updated successfully', 'profile' => $profile]);
    }

    // Remove the specified profile from storage
    public function destroy($id)
    {
        $profile = Profile::find($id);

        if (!$profile) {
            return response()->json(['message' => 'Profile not found'], 404);
        }

        $profile->delete();

        return response()->json(['message' => 'Profile deleted successfully']);
    }
}
