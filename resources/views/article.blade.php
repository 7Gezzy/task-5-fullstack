@extends('layouts.main')

@section('container')
<body style="font-family: roboto">
    <article class="border-bottom pb-2">
      <h3 class="mb-2 mt-2">
        {{ $article->title }}
      </h3>
      <p class="pb-0 pt-1 mb-1" style="font-weight: 500; font-size: 13pt;">By.
        <a href="#" style="font-weight: 500; text-decoration: none; font-size: 13pt;">{{ $article->user->name }} </a>
        <a>in</a>
        <a href="/categories/{{ $article->category->slug }}" style="text-decoration: none; font-size: 13pt;">{{ $article->category->name }}</a>
      </p>
      <p class="pb-0" style="font-size: 12pt;">{!! $article->content !!}</p>
    </article>
    <article class="pt-2">
        <a href="/articles" style="text-decoration: none">Back to Articles</a>
    </article>
</body>
@endsection
