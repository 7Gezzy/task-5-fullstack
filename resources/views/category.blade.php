@extends('layouts.main')

@section('container')
<body style="font-family: roboto">
    <h1 class="mb-4">Articles Category : {{ $category }}</h1>

    @foreach ($articles as $article)
        <article class="mb-3">
          <h4>
            <a href="/articles/{{ $article->slug }}" style="text-decoration: none">{{ $article->title }}</a>
          </h4>
          <p class="mb-0" style="font-weight: 500">By. George in <a href="/categories/{{ $article->category->slug }}" style="text-decoration: none">{{ $article->category->name }}</a></p>
          <p>{!! $article->excerpt !!}</p>
        </article>
    @endforeach
        <article class="pt-2">
            <a href="/categories" style="text-decoration: none">Category List</a>
        </article>
</body>
@endsection
