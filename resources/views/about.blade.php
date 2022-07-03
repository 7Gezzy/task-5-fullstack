@extends('layouts.main')

@section('container')
    <h1 style="font-family: sans-serif">About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img {{ $image }}>
@endsection
