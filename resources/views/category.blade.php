@extends('layouts.main')

@section('container')
    <div class="mb-4">
        <h2 class="mb-5">Post Category : {{ $category }}</h2>
        <h5><a href="/categories" class="text-decoration-none">Back to category menu</a></h5>
    </div>
    
    @foreach ($posts as $post)

    <article class="mb-5">
        <h2>
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <p>{{ $post->excerpt }}</p>
    </article>

    @endforeach

    <h5><a href="/categories" class="text-decoration-none">Back to category menu</a></h5>


@endsection 