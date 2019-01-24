@extends('main')

@section('title', '| Archives')

@section('content')

<div style="margin-top:70px" class="row">
    <div class="col-md-12 col-md-offset-2 mx-auto">
        <h1>Blogs</h1>
    </div>
</div>

@foreach($posts as $post)

<div class="row">
    <div class="col-md-8 col-md-offset-2 mx-auto">
        <h2>{{$post->title}}</h2>
        <h5>Published: {{ date('M j, Y',  strtotime($post->created_at)) }}</h5>
        <p>{{ substr($post->body,0, 250) }} {{ strlen($post->body) >250 ? '...' : ""}}</p>


        <a href="{{route('blog.single', $post->id)}}"> Read More<a>
    
    </div>
</div>

@endforeach

<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            {!! $posts->render() !!}
        </div>
    </div>
</div>

@stop()