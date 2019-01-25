@extends('main')

@section('title', '| Delete Comment')

@section('content')

<div style="margin-top:80px" class="row">
    <div class="col-md -8 mx-auto">
        <h3>Delete this Comment</h3>
        <p>
            <strong>Name: </strong> {{ $comment->name}} <br>
            <strong>Email: </strong> {{$comment->email}} <br>
            <strong>Comment: </strong> {{$comment->comment}} <br>

        </p>

        {{Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) }}
        {{Form::submit('Yes. Delete it', ['class' => 'btn btn-danger'])}}
        {{Form::close()}}

    </div>
</div>

@endsection()