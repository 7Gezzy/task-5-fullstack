@extends('layouts.main')

@section('container')
<body style="font-family: roboto">
    <h2 class="mb-4">Articles</h2>

    @foreach ($articles as $article)
        <article class="border-bottom pb-2" >
          <h5 class="mb-2 mt-2">
            <a href="/articles/{{ $article->slug }}" style="text-decoration: none">{{ $article->title }}</a>
          </h5>
          <p class="mb-0" style="font-weight: 500">By.
            <a href="/authors/{{ $article->user->username }}" style="font-weight: 500; text-decoration: none;">{{ $article->user->name }} </a>
            <a>in</a>
            <a href="/categories/{{ $article->category->slug }}" style="text-decoration: none">{{ $article->category->name }}</a>
          </p>
          <p class="pb-0" style="font-size: 11pt;">{!! $article->excerpt !!}</p>
          <a href="/articles/{{ $article->slug }}" style="text-decoration: none; font-size: 10pt;">Read More..</a>
        </article>
    @endforeach
        <article class="pt-2">
            <a href="/categories" style="text-decoration: none; font-size: 10pt;">Category List</a>
        </article>
</body>
@endsection
