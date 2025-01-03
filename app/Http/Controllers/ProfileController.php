<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user(); // Ambil data user yang sedang login
        return view('edit-profile', compact('user')); // Sesuaikan dengan nama file Blade
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        // Validasi input
        $validatedData = $request->validate([
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'nullable|string',
            'work_experience' => 'nullable|string',
            'last_education' => 'nullable|string',
            'expertise' => 'nullable|string',
        ]);

        // Handle profile picture upload
        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $path = $file->store('profile_pictures', 'public'); // Simpan di `storage/app/public/profile_pictures`

            // Hapus foto profil lama jika ada
            if ($user->profile_picture && Storage::exists('public/' . $user->profile_picture)) {
                Storage::delete('public/' . $user->profile_picture);
            }

            // Simpan path baru ke database
            $user->profile_picture = 'profile_pictures/' . basename($path);
        }

        // Update field lainnya
        $user->name = $validatedData['name'];
        $user->phone = $validatedData['phone'];
        $user->address = $validatedData['address'] ?? $user->address;
        $user->work_experience = $validatedData['work_experience'] ?? $user->work_experience;
        $user->last_education = $validatedData['last_education'] ?? $user->last_education;
        $user->expertise = $validatedData['expertise'] ?? $user->expertise;

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
