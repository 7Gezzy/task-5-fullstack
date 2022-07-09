@extends('layouts.main')

@section('container')
<body style="font-family: roboto">
    <h1 class="mb-4">Article Categories</h1>

    @foreach ($categories as $category)
        <ul class="mb-1">
            <li>
             <h5>
                <a href="/categories/{{ $category->slug }}" style="text-decoration: none">{{ $category->name }}</a>
             </h5>
            </li>
        </ul>
    @endforeach
    <a href="/articles" style="text-decoration: none">Back to Articles</a>
</body>

@endsection
