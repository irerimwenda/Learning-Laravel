@extends('main')

@section('title', '| Create New Post')

@include('partials._css')

<div class="create-post row">
    <div class="col-md-8 col-md-offset-2 mx-auto">
        
        <h1>Create New Post</h1>
        <hr>
        
        {!! Form::open(['route' => 'post.store', 'data-parsley-validate' =>'']) !!}
          {{ Form::label('title', 'Title:') }}
          {{ Form::text('title',null,array('class' => 'form-control', 'required' => '','maxlength' => '200'))}}

          {{ Form::label('body', "Post Body:")}}
          {{ Form::textarea('body', null,array('class'=>'form-control', 'required' => ''))}}
        
          {{ Form::submit('Create Post',array('class'=>'btn btn-info btn-lg', 'style'=>'margin-top:20px;'))}}
        {!! Form::close() !!}

    </div>
</div>

@include('partials._javascript')


