@extends('layout/main')
@section('container')
    <h2 class="mb-5">{{ $title }}</h2>
    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/random/1200×400/?{{ $posts[0]->category->name }}" class="card-img-top"
                height="400" width="100%" style="object-fit: cover" alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
                <h3 class="card-title"> <a href="/posts/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a> </h3>
                <small>
                    <p>By <a href="/author/{{ $posts[0]->author->username }}"
                            class="text-decoration-none">{{ $posts[0]->author->name }}</a>
                        in
                        <a href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </p>
                </small>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn-primary">Read more</a>


            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute bg-dark text-light p-2"
                            style="background-color: rgba(0,0,0,0.5) !important">
                            <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                        </div>
                        <img src="https://source.unsplash.com/random/1200×400/?{{ $post->category->name }}" width="100%"
                            height="150" style="object-fit: cover" class="card-img-top"
                            alt="{{ $post->category->name }}">
                        <div class="card-body">
                            <h5 class="card-title"> <a href="/posts/{{ $post->slug }}"
                                    class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                            <small>
                                <p>By <a href="/author/{{ $posts[0]->author->username }}"
                                        class="text-decoration-none">{{ $posts[0]->author->name }}</a>
                                    {{ $posts[0]->created_at->diffForHumans() }}
                                </p>
                            </small>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- @foreach ($posts->skip() as $post)
        <article class="mb-5 border-bottom">
            <h3>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a>
            </h3>
            <p>By <a href="/author/{{ $post->author->username }}"
                    class="text-decoration-none">{{ $post->author->name }}</a>
                in
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>

            <p>{{ $post->excerpt }}</p>

            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more</a>
        </article>
    @endforeach --}}
@endsection
