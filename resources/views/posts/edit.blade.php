@extends('main')

@section('title', '| Edit Blog Post')

@section('content')

<div style="margin-top:80px" class="row">

{!! Form::model($post, ['route' => ['post.update', $post->id]]) !!}

<div class="col-md-8">

{{Form::label('title', "Title:")}}
{{Form::text('title', null, ['class' => 'form-control input-lg'])}}

{{Form::label('body', "Body:", ['class' => 'form-spacing-top'])}}
{{Form::textarea('body', null, ['class' => 'form-control'])}}

</div>

<div class="col-md-4">
    <div class="well">

    <dl class="dl-horizantal">
        <dt>Created At</dt>
        <dd>{{date('M j, Y h:i a', strtotime($post->created_at))}}</dd>
    </dl>

    <dl class="dl-horizantal">
            <dt>Last Updated At</dt>
            <dd>{{date('M j, Y h:i a', strtotime($post->updated_at))}}</dd>
        </dl>

        <hr>

        <div class="row">
            <div class="col-sm-6">
                    {!! Html::linkRoute('post.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger')) !!}
            </div>

            <div class="col-sm-6">
                    {!! Html::linkRoute('post.update', 'Save Changes', array($post->id), array('class' => 'btn btn-success')) !!}
            </div>
        </div>
       

</div>

</div>

{!! Form::close() !!}

</div>


@stop()