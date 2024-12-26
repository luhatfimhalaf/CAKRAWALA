@extends('layouts.app')

@section('content')
    <h1>Courses</h1>
    <ul>
        @foreach ($courses as $course)
            <li>
                <a href="{{ route('courses.show', $course->id) }}">{{ $course->title }}</a> - ${{ $course->price }}
            </li>
        @endforeach
    </ul>
@endsection
