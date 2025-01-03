<!-- resources/views/show-profile.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Profile</h1>
        <div class="profile-info">
            <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture" width="150">
            <h2>{{ $user->name }}</h2>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Phone:</strong> {{ $user->phone }}</p>
            <p><strong>Address:</strong> {{ $user->address }}</p>
            <p><strong>Work Experience:</strong> {{ $user->work_experience }}</p>
            <p><strong>Last Education:</strong> {{ $user->last_education }}</p>
            <p><strong>Expertise:</strong> {{ $user->expertise }}</p>
            <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
        </div>
    </div>
@endsection
