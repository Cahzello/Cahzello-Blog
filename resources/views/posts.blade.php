@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="mb-3 row justify-content-center">
        <div class="col-md-6">
            <form action="/posts" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search">
                    <button class="btn btn-warning" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

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

                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-warning">Read more</a>


            </div>
        </div>
 
    
    
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
                        <a href="/posts/{{ $post->slug }}" class="btn btn-warning bg-gradient">Read More</a>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>

    @else
        <p class="text-center fs-4">No Post Found.</p>
    @endif

@endsection 