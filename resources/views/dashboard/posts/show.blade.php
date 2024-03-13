@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <article class="mb-5">
                    <h2>{{ $post->title }}</h2>

                    <a href="/dashboard/posts" class="btn btn-success my-2">Back to all my post</a>
                    <a href="" class="btn btn-warning my-2">Edit</a>
                    <a href="" class="btn btn-danger my-2">Delete</a>

                    <img src="https://source.unsplash.com/random/1200×400/?{{ $post->category->name }}" width="100%"
                        height="300" style="object-fit: cover" alt="{{ $post->category->name }}">
                    {!! $post->body !!}
                </article>

            </div>
        </div>
    </div>
@endsection
