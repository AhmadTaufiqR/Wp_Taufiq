@extends('layout.app')

@section('title', 'about')

@section('content')
    <p class="fs-1 text-center">Ini About</p>
    <h1>{{ $email }}</h1>
    <h2>{{ $name }}</h2>
    <img src="img/{{ $gambar }}">
@endsection