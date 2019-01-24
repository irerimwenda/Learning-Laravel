@extends('main')

@section('title', '| Edit Tag ')

@section('content')

<div class="col-md-12" style="margin-top:80px">

{{ Form::model($tag, ['route'=>['tags.update', $tag->id], 'method' => "PUT"]) }}

{{Form::label('name', 'Title')}}
{{Form::text('name',null,['class' => 'form-control'])}}
{{Form::submit('Save Changes', ['class'=>'btn btn-info form-spacing-top'])}}
{{Form::close()}}

</div>

@endsection()