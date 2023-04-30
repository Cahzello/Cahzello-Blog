@extends('layouts.main')

@section('container')
    <div class="mb-4">
        <h1 class="mb-4">{{ $title }}</h1>
    </div>

    @foreach ($posts as $post)

    <article class="mb-5 border-bottom pb-4">
        <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>

        <p>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

        <p>{{ $post->excerpt }}</p>

        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
    </article>

    @endforeach
    <h5 ><a href="/blog" class="text-decoration-none">Back To Posts</a></h5>

@endsection 