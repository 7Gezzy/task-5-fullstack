@extends('layouts.main')

@section('container')
<body style="font-family: roboto">
    <article>
        <h3>{{ $article->title }}</h3>

        <p class="pt-2">By. George in <a href="/categories/{{ $article->category->slug }}" style="text-decoration: none">{{ $article->category->name }}</a></p>

        {!! $article->content !!}
    </article>
    <a href="/articles" style="text-decoration: none">Back to Articles</a>
</body>
@endsection
