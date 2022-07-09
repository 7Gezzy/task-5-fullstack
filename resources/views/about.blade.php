@extends('layouts.main')

@section('container')
<body style="font-family: roboto">
    <h1>About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img {{ $image }}>
</body>
@endsection
