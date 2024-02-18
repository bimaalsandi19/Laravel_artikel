@extends('layout/main')
@section('container')
    <h2 class="mb-5">Halaman Blog Posts</h2>
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom">
            <h3>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a>
            </h3>
            <p>By <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            <h5>{{ $post->author }}</h5>

            <p>{{ $post->excerpt }}</p>

            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more</a>
        </article>
    @endforeach
@endsection
