@extends('layouts.main')

@section('container')
<body style="font-family: roboto">
    <h1 class="mb-4">Articles</h1>

    @foreach ($articles as $article)
          <h4 class="mb-0">
            <a href="/articles/{{ $article->slug }}" style="text-decoration: none">{{ $article->title }}</a>
          </h4>
          <p>{!! $article->excerpt !!}</p>
    @endforeach
    <a href="/categories" style="text-decoration: none">Category List</a>
</body>
@endsection
