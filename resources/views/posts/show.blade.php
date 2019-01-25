@extends('main')

@section('title', '|View Post')


@section('content')


<div style="margin-top:80px" class="row">


<div class="col-md-8">

<img style="width:250px;height:250px" src="{{asset('images/'.$post->image)}}" />

<h1>{{ $post->title }}</h1>
<p class="lead">{{ $post->body }}</p>

<hr>
@foreach ($post->tags as $tag)

    <span class="badge badge-info"> {{$tag->name}} </span>

@endforeach

</div>

<div id="backend-comments" style="margin-top:50px">
<h3>Comment <small> {{ $post->comments()->count() }} total</small></h3>

<table class="comment-table table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Comment</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @foreach ($post->comments as $comment)
        <tr>
            <td> {{ $comment->name }} </td>
            <td> {{$comment->email}} </td>
            <td> {{$comment->comment}} </td>
            <td>
            <a href="{{ route('comments.edit', $comment->id)}}" class="btn btn-info">Edit</a>
            <a href="{{ route('comments.delete', $comment->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

<div class="col-md-4">
    <div class="well">

    <dl class="dl-horizantal">
        <dt>Url:</dt>
        <dd><a href="{{ url('blog/'.$post->slug) }}">{{ url('blog/'.$post->slug) }}</a></dd>
    </dl>

     <dl class="dl-horizantal">
        <dt>Category: </dt>
        <dd><p> {{ $post->category->name }} </p></dd>
    </dl>

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
                    {!! Html::linkRoute('post.edit', 'Edit', array($post->id), array('class' => 'btn btn-lg btn-info')) !!}
            </div>

            <div class="col-sm-6">
                {!! Form::open(['route' => ['post.destroy', $post->id], 'method'=>'DELETE']) !!}

                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}

                {!! Form::close() !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                {{ Html::linkRoute('post.index', '<< See All Posts', [], ['class' => 'btn  btn-warning']) }}
            </div>
        </div>
       

</div>
</div>

</div>



@stop()