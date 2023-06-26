@extends('layouts.main')

@section('container')
    <main class="px-3">
        <div class="text-center border-bottom">
            <h1>Welcome.</h1>
            <p class="lead">
                Welcome to our website, where you'll find a fusion of website programming information and personal sharing,
                connecting programmers through insightful articles and personal stories.</p>
            <p class="lead">
                <a href="/login" class="btn btn-lg btn-outline-dark">Learn more</a>
            </p>
        </div>

        <div class="text-center mt-3">
            <h1>Latest Post</h1>
        </div>

        <div class="container mt-4 border-bottom">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="position-absolute bg-dark bg-gradient px-2 py-1 ">
                                <a href="/posts?category={{ $post->category->slug }}"
                                    class="text-decoration-none text-white">
                                    {{ $post->category->name }}
                                </a>
                            </div>
                            @if ($post->image)
                                <a href="/posts/{{ $post->slug }}">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                        class="img-fluid">
                                </a>
                            @else
                                <a href="/posts/{{ $post->slug }}">
                                    <img src="https://picsum.photos/id/{{ $post->id }}/500/400" class="card-img-top"
                                        alt="{{ $post->category->name }}">
                                </a>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p>
                                    <small class="text-muted">
                                        By <a href="/posts?author={{ $post->author->username }}"
                                            class="text-decoration-none">{{ $post->author->name }}</a><span
                                            title="{{ $post->created_at }}"> in <a
                                                href="/posts?category={{ $posts[0]->category->slug }}"
                                                class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                                            {{ $post->created_at->diffForHumans() }}</span>
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-warning bg-gradient">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="text-center mt-3">
            <h1>Post By Category</h1>
        </div>

        <div class="container mt-4 border-bottom">
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-md-4">
                        <a href="/posts?category={{ $category->slug }}">
                            <div class="card bg-white text-white">
                                <img src="https://picsum.photos/id/{{ $category->id }}/400/400?blur=10" class="card-img"
                                    alt="{{ $category->name }}">
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                    <h5 class="card-title text-center flex-fill p-4 fs-3">{{ $category->name }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <br>

    </main>
   
@endsection
