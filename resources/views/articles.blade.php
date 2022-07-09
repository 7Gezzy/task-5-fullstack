@extends('layouts.main')

@section('container')

    @foreach ($articles as $article)
        <body class="mb-2">
          <h4>
            <a href="/articles/{{ $article->slug }}" style="text-decoration: none">{{ $article->title }}</a>
          </h4>
          <p>{!! $article->excerpt !!}</p>
        </body>
    @endforeach

@endsection
