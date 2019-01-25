@extends('main')

@section('title', '| Edit Comment')


@section('content')
<div class="row">
<div style="margin-top:80px" class="md-col-8 mx-auto">
<h1>Edit Comment</h1>

{{Form::model($comment, ['route' => ['comments.update', $comment->id, 'method' => 'PUT']])}}

{{Form::label('name', 'Name:')}}
{{Form::text('name', null, ['class' => 'form-control', 'readonly']) }}

{{Form::label('email', 'Email:')}}
{{Form::text('email',null, ['class' =>'form-control', 'readonly'])}}

{{Form::label('comment', 'Comment:')}}
{{Form::textarea('comment', null, ['class' => 'form-control'])}}

{{Form::submit('Update Comment', ['class' => 'btn btn-info form-spacing-top'])}}

{{Form::close()}}
</div>
</div>
@endsection()