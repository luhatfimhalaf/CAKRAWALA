@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Halaman Akun</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Profil Pengguna</h5>
            <p><strong>Nama:</strong> {{ $user['name'] }}</p>
            <p><strong>Email:</strong> {{ $user['email'] }}</p>
            <p><strong>Bergabung Sejak:</strong> {{ $user['created_at']->format('d M Y') }}</p>
        </div>
    </div>
</div>
@endsection
