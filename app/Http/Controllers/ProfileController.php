<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
<<<<<<< Updated upstream
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

        return response()->json(['message' => 'Profile berhasil dibuat', 'profile' => $profile], 201);
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
=======
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
>>>>>>> Stashed changes
    }
}
