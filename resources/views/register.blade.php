@extends('layouts.app')

@section('title', 'Halaman Registrasi')

@section('content')
<div class="container-fluid">
    <div class="row vh-100">
        <!-- Bagian Kiri -->
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/Rectangle 5927.png') }}" alt="People working" class="img-fluid rounded">
        </div>
        <!-- Bagian Kanan -->
        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center bg-light">
            <div class="form-container w-75">
                <h2 class="mb-4">Hello!</h2>
                <p class="text-muted">Sign up to Get Started</p>
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Full Name" required>
                      </div>
                      <div class="mb-3">
                        <input type="date" class="form-control" placeholder="Birthday" required >
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email Address" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Password" required>
                    </div>
                    <p class="text-muted">If you already have an account registered, you can <a href="{{ route('login') }}">log in here</a></p>
                    <button type="submit" class="btn w-100">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
