@extends('layouts.app')

@section('content')
    <h1>{{ $course->title }}</h1>
    <p>{{ $course->description }}</p>
    <p>Price: ${{ $course->price }}</p>

    <form action="{{ route('transactions.create', $course->id) }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <button type="submit">Buy Now</button>
    </form>
@endsection
