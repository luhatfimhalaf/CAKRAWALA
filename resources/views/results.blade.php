@extends('layouts.app')

@section('content')
    <h1>Search Results</h1>
    <p>Results for: <strong>{{ $query }}</strong></p>

    @if(count($results) > 0)
        <ul>
            @foreach($results as $result)
                <li>{{ $result }}</li>
            @endforeach
        </ul>
    @else
        <p>No results found.</p>
    @endif
@endsection
