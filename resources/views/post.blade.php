@extends('layout/main')
@section('container')
    <article class="mb-5">
        <h2>{{ $post->title }}</h2>
        <h5>{{ $post->author }}</h5>
        {!! $post->body !!}
    </article>

    <a href="/posts">Back to posts</a>
@endsection
