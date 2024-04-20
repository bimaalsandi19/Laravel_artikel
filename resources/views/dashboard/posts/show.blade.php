@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <article class="mb-5">
                    <h2>{{ $post->title }}</h2>

                    <a href="/dashboard/posts" class="btn btn-success my-2">Back to all my post</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning my-2">Edit</a>

                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger my-2" onclick="return confirm('Are you sure ?')">Delete
                        </button>

                    </form>

                    <img src="https://source.unsplash.com/random/1200×400/?{{ $post->category->name }}" width="100%"
                        height="300" style="object-fit: cover" alt="{{ $post->category->name }}">
                    {!! $post->body !!}
                </article>

            </div>
        </div>
    </div>
@endsection
