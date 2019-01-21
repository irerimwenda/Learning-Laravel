@extends('main')

@section('title', '|View Post')

@include('partials._css')

@section('content')

<h1>{{ $post->title }}</h1>
<p class="lead">{{ $post->body }}</p>
@endsection()

@include('partials._javascript')