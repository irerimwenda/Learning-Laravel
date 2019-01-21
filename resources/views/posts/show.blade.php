@extends('main')

@section('title', '|View Post')

@include('partials._css')

@section('content')

<div class="row">

<div class="col-md-8">

<h1>{{ $post->title }}</h1>
<p class="lead">{{ $post->body }}</p>

</div>

<div class="col-md-4">
    <div class="well">

    <dl class="dl-horizantal">
        <dt>Created At</dt>
        <dd>{{date('M j, Y h:i a', strtotime($post->created_at))}}</dd>
    </dl>

    <dl class="dl-horizantal">
            <dt>Updated At</dt>
            <dd>{{date('M j, Y h:i a', strtotime($post->updated_at))}}</dd>
        </dl>

        <hr>

        <div class="row">
            <div class="col-sm-6">
                    <a href="" class="btn btn-info">Edit</a>
            </div>

            <div class="col-sm-6">
                    <a href="" class="btn btn-danger">Delete</a>
            </div>
        </div>
       

</div>
</div>

</div>



@endsection()

@include('partials._javascript')