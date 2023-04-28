@extends('layouts.main')

@section('container')
    <h2 class="mb-5">Post Category : {{ $category }}</h2>
    
    @foreach ($posts as $post)

    <article class="mb-5">
        <h2>
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <h5>Code: {{ $post->code }}</h5>
        <p>{{ $post->excerpt }}</p>
    </article>

    @endforeach

    <a href="/categories">Back to category menu</a>


@endsection 