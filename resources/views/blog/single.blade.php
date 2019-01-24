@extends('main')

@section('title', "| $post->title")

@section('content')

<div class="row">
    <div style="margin-top:60px" class="col-md-8 col-md-offset-2 mx-auto">

        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
    
        <p>Category: {{ $post->category->name}} </p>

    </div>
</div>

@stop()