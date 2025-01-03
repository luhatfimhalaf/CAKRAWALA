<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
<<<<<<< HEAD
    // Show profile view
    public function show()
    {
        $user = Auth::user(); 
        return view('show-profile', compact('user'));
    }

    // Edit profile view
    public function edit()
    {
        $user = Auth::user();
        return view('edit-profile', compact('user'));
    }

    // Update profile data
=======
    public function edit()
    {
        $user = Auth::user(); // Ambil data user yang sedang login
        return view('edit-profile', compact('user')); // Sesuaikan dengan nama file Blade
    }

>>>>>>> 8f5fd836cd356f5db71fd9418e40364e773adcdf
    public function update(Request $request)
    {
        $user = auth()->user();

<<<<<<< HEAD
        // Validate input
=======
        // Validasi input
>>>>>>> 8f5fd836cd356f5db71fd9418e40364e773adcdf
        $validatedData = $request->validate([
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'nullable|string',
            'work_experience' => 'nullable|string',
            'last_education' => 'nullable|string',
            'expertise' => 'nullable|string',
<<<<<<< HEAD
            'remove_profile_picture' => 'nullable|boolean', // Field to handle profile picture removal
            'remove_address' => 'nullable|boolean', // Field to handle address removal
            'remove_work_experience' => 'nullable|boolean', // Field to handle work experience removal
            'remove_last_education' => 'nullable|boolean', // Field to handle education removal
            'remove_expertise' => 'nullable|boolean', // Field to handle expertise removal
=======
>>>>>>> 8f5fd836cd356f5db71fd9418e40364e773adcdf
        ]);

        // Handle profile picture upload
        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
<<<<<<< HEAD
            $path = $file->store('profile_pictures', 'public'); // Store in `storage/app/public/profile_pictures`

            // Delete old profile picture if exists
=======
            $path = $file->store('profile_pictures', 'public'); // Simpan di `storage/app/public/profile_pictures`

            // Hapus foto profil lama jika ada
>>>>>>> 8f5fd836cd356f5db71fd9418e40364e773adcdf
            if ($user->profile_picture && Storage::exists('public/' . $user->profile_picture)) {
                Storage::delete('public/' . $user->profile_picture);
            }

<<<<<<< HEAD
            // Save the new profile picture path to the database
            $user->profile_picture = 'profile_pictures/' . basename($path);
        }

        // Handle profile picture removal
        if ($request->remove_profile_picture) {
            // Delete the old profile picture
            if ($user->profile_picture && Storage::exists('public/' . $user->profile_picture)) {
                Storage::delete('public/' . $user->profile_picture);
            }

            // Set the profile_picture field to null
            $user->profile_picture = null;
        }

        // Handle other data removals
        if ($request->remove_address) {
            $user->address = null;
        }

        if ($request->remove_work_experience) {
            $user->work_experience = null;
        }

        if ($request->remove_last_education) {
            $user->last_education = null;
        }

        if ($request->remove_expertise) {
            $user->expertise = null;
        }

        // Update other fields
=======
            // Simpan path baru ke database
            $user->profile_picture = 'profile_pictures/' . basename($path);
        }

        // Update field lainnya
>>>>>>> 8f5fd836cd356f5db71fd9418e40364e773adcdf
        $user->name = $validatedData['name'];
        $user->phone = $validatedData['phone'];
        $user->address = $validatedData['address'] ?? $user->address;
        $user->work_experience = $validatedData['work_experience'] ?? $user->work_experience;
        $user->last_education = $validatedData['last_education'] ?? $user->last_education;
        $user->expertise = $validatedData['expertise'] ?? $user->expertise;

        $user->save();

<<<<<<< HEAD
        return redirect()->route('profile.show')->with('success', 'Profile updated successfully!');
=======
        return redirect()->back()->with('success', 'Profile updated successfully!');
>>>>>>> 8f5fd836cd356f5db71fd9418e40364e773adcdf
    }
}
