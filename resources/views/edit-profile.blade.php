<!-- resources/views/edit-profile.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Profile</h1>

        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone', $user->phone) }}" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" value="{{ old('address', $user->address) }}">
                @if ($user->address)
                    <div>
                        <input type="checkbox" name="remove_address" value="1"> Remove address
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="work_experience" class="form-label">Work Experience</label>
                <input type="text" name="work_experience" class="form-control" value="{{ old('work_experience', $user->work_experience) }}">
                @if ($user->work_experience)
                    <div>
                        <input type="checkbox" name="remove_work_experience" value="1"> Remove work experience
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="last_education" class="form-label">Last Education</label>
                <input type="text" name="last_education" class="form-control" value="{{ old('last_education', $user->last_education) }}">
                @if ($user->last_education)
                    <div>
                        <input type="checkbox" name="remove_last_education" value="1"> Remove last education
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="expertise" class="form-label">Expertise</label>
                <input type="text" name="expertise" class="form-control" value="{{ old('expertise', $user->expertise) }}">
                @if ($user->expertise)
                    <div>
                        <input type="checkbox" name="remove_expertise" value="1"> Remove expertise
                    </div>
                @endif
            </div>

            <!-- Display current profile picture -->
            <div class="mb-3">
                <label for="profile_picture" class="form-label">Profile Picture</label>
                <div>
                    @if ($user->profile_picture)
                        <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture" width="150">
                        <div>
                            <input type="checkbox" name="remove_profile_picture" value="1"> Remove profile picture
                        </div>
                    @endif
                </div>
                <input type="file" name="profile_picture" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
@endsection
