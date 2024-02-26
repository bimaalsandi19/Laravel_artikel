@extends('layout/main')
@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <article class="mb-5">
                    <h2>{{ $post->title }}</h2>

                    <p>By <a href="/author/{{ $post->author->username }}"
                            class="text-decoration-none">{{ $post->author->name }}</a> in <a
                            href="/posts?category={{ $post->category->slug }}"
                            class="text-decoration-none">{{ $post->category->name }}</a></p>

                    <img src="https://source.unsplash.com/random/1200×400/?{{ $post->category->name }}" width="100%"
                        height="300" style="object-fit: cover" alt="{{ $post->category->name }}">
                    {!! $post->body !!}
                </article>

                <a href="/posts">Back to posts</a>

            </div>
        </div>
    </div>
@endsection
