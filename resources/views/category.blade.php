@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Articles Category : {{ $category }}</h1>

    @foreach ($articles as $article)
        <article class="mb-3">
          <h5>
            <a href="/articles/{{ $article->slug }}" style="text-decoration: none">{{ $article->title }}</a>
          </h5>
          <p>{!! $article->excerpt !!}</p>
        </article>

    @endforeach

    <a href="/articles" style="text-decoration: none">Back to Articles</a>
@endsection
