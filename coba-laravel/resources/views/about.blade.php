@extends('layouts.main')
@section('container')
    <h1>{{ $name }}</h1>
    <h3>{{ $email }}</h3>
    <img src="{{ $image }}" alt="{{ $name }}" class="image-thumbnail rounded-circle" width="200">
@endsection
