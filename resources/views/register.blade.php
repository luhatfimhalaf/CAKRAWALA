<!-- resources/views/auth/register.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Registrasi Pengguna</h1>
    <form action="{{ route('register.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Kata Sandi</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
@endsection
