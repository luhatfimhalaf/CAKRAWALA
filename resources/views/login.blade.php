@extends('layouts.app')

@section('title', 'Halaman Login')

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
                <h2 class="mb-4">Hello Again!</h2>
                <p class="text-muted">Welcome Back</p>
                <form>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email Address" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Password" required>
                    </div>
                    <p class="text-muted">If you don’t have an account registered, you can register<a href="{{ route('register') }}"> here</a></p>
                    <button type="submit" class="btn w-100">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
