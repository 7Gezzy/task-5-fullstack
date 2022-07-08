@extends('layouts.main')

@section('container')

    @foreach ($posts as $post)
        <article class="mb-5">
          <h4>
            <a href="/posts/{{ $post->slug }}" style="text-decoration: none">{{ $post->title }}</a>
          </h4>
          <p>{!! $post->excerpt !!}</p>
        </article>
    @endforeach

@endsection
