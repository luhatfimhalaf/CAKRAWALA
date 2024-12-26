@extends('layouts.app')

@section('content')
    <h1>Transaction Details</h1>
    <p>Transaction ID: {{ $transaction->id }}</p>
    <p>Purchase Code: {{ $transaction->purchase_code }}</p>
    <p>Name: {{ $transaction->name }}</p>
    <p>Email: {{ $transaction->email }}</p>
    <p>Course: {{ $transaction->course->title }}</p>
    <p>Price: ${{ $transaction->price }}</p>
    <p>Status: {{ $transaction->status }}</p>
    <a href="{{ route('transactions.pay', $transaction->id) }}">Simulate Payment</a>
@endsection
