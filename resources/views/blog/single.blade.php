@extends('main')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', "| $titleTag")

@section('content')

<div class="row">
    <div style="margin-top:60px" class="col-md-8 col-md-offset-2 mx-auto">

        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
    
        <p>Category: {{ $post->category->name}} </p>

    </div>
</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2 mx-auto">
        @foreach($post->comments as $comment)
           <div class="comment">
                <p><strong>Name: </strong>{{ $comment->name}}</p>
                <p><strong>Comment:</strong><br>{{ $comment->comment}}</p>
           </div>
        @endforeach
    </div>
</div>

<div class="row">
    <div id="comment-form" class="col-md-8 col-md-offset-2 mx-auto">
        {{ Form::open (['route' => ['comments.store', $post->id, 'method' => 'POST'] ]) }}
        <div class="row">
            <div class="col-md-6">
                {{ Form::label('name', "Name:")}}
                {{ Form::text('name', null, ['class' => 'form-control'])}}
            </div>

            <div class="col-md-6">
                {{ Form::label('email', 'Email')}}
                {{ Form::text('email', null, ['class' => 'form-control'])}}
            </div>

            <div class="col-md-12 form-spacing-top">
                {{ Form::label('comment', 'Comment:')}}
                {{ Form::textarea('comment',null, ['class'=>'form-control', 'rows' => '5'])}}

                {{Form::submit('Add Comment', ['class'=>'btn btn-success form-spacing-top'])}}
            </div>
        </div>
        {{ Form::close()}}
    </div>
</div>

@stop()