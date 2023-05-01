@extends('layouts.main')

@section('container')
    <h1 class="mb-4">{{ $title }}</h1>

    @if ($posts->count())
        <div class="card mb-4">
            <img src="https://picsum.photos/id/1/1500/550" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <p>
                <small class="text-muted">
                    By <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                </small>
                </p>
                
                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>


            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post Found.</p>
    @endif
    
    
    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post )
                
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="position-absolute bg-dark bg-gradient px-2 py-1 "><a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                    <a href="/posts/{{ $post->slug }}">
                        <img src="https://picsum.photos/id/{{ $post->id}}/500/400" class="card-img-top" alt="{{ $post->category->name }}">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p>
                            <small class="text-muted">
                                By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a><span title="{{ $post->created_at }}"> {{ $post->created_at->diffForHumans() }}</span> 
                            </small>
                        </p>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/posts/{{ $post->slug }}" class="btn btn-primary bg-gradient">Read More</a>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>

@endsection 