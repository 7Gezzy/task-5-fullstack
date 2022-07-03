@extends('layouts.main')

@section('container')

    @foreach ($posts as $post)
        <article class="mb-5">
          <h4>
            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
          </h4>
          <h5>{{ $post->author }}</h5>
          <p>{{ $post->content }}</p>
        </article>
    @endforeach

@endsection
