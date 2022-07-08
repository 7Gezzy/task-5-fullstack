@extends('layouts.main')

@section('container')
    <article>
        <h3>{{ $post->title }}</h3>

        <p class="pt-2">By. George in {{ $post->category->name }}</p>

        {!! $post->content !!}
    </article>
    <a href="/posts" style="text-decoration: none">Back to Posts</a>
@endsection
