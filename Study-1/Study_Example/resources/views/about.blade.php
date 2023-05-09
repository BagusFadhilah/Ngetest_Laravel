@extends('layouts/main')

@section('container')
    <center>
    <h1>About</h1>

    <br>
    <img src="img/{{ $image }}" alt="{{ $name }}">
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    
    </center>
@endsection