@extends('layout/main')
@section('container')
    <h3>Post Categories </h3>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/random/1200×400/?{{ $category->name }}" class="card-img"
                                width="100%" height="350" alt="$category->name">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-3" style="background: rgba(0,0,0,0.7)">
                                    {{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    {{-- <ul>
            <li>
                <h2>
                    <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                </h2>
            </li>
        </ul> --}}
@endsection
