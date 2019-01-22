@extends('main')

@section('title', '|View Post')


@section('content')


<div style="margin-top:80px" class="row">


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
                    {!! Html::linkRoute('post.edit', 'Edit', array($post->id), array('class' => 'btn btn-info')) !!}
            </div>

            <div class="col-sm-6">
                {!! Form::open(['route' => ['post.destroy', $post->id], 'method'=>'DELETE']) !!}

                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}

                {!! Form::close() !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                {{ Html::linkRoute('post.index', '<< See All Posts', [], ['class' => 'btn btn-warning']) }}
            </div>
        </div>
       

</div>
</div>

</div>



@stop()