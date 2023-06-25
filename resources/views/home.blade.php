@extends('layouts.main')

@section('container')
    <main class="px-3">
        <div class="text-center border-bottom">
            <h1>Welcome.</h1>
            <p class="lead">
                Our website serves the purposes of content sharing, community building, skill enhancement, inspiration and exploration, networking and collaboration, and personal and professional growth for bloggers.</p>                
            <p class="lead">
                <a href="/login" class="btn btn-lg border-white bg-warning">Learn more</a>
            </p>
        </div>

        <div class="text-center mt-3">
            <h1>Latest Post</h1>
        </div>
        <div class="card mb-4 mt-4">
            @if ($posts[0]->image)
            <div style="max-height: 450px; overflow: hidden;">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
            </div>
            @else
            <img src="https://picsum.photos/id/1/1500/550" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            @endif
            <div class="card-body text-center">
                <h3 class="card-title">
                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                        {{ $posts[0]->title }}
                    </a>
                </h3>
                <p>
                    <small class="text-muted">
                        By <a href="/posts?author={{ $posts[0]->author->username }}"
                            class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                            href="/posts?category={{ $posts[0]->category->slug }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-warning">Read more</a>
            </div>
        </div>
    </main>
@endsection
