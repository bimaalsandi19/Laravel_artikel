@extends('layout/main')

@section('container')
    <h2>Halaman About</h2>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $images }}" alt="person" width="200">
@endsection
