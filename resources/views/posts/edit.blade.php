@extends('main')

@section('title', '| Edit Blog Post')


@section('stylesheets')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

<script>
tinymce.init({
  selector: 'textarea'
});
</script>

@endsection()

@include('partials._css')

@section('content')

<div style="margin-top:80px" class="row">


<div class="edit-section col-md-7">

{!! Form::model($post, ['route' => ['post.update', $post->id], 'method'=>'PUT']) !!}

{{ Form::label('title', 'Title:')}}
{{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

{{ Form::label('slug', 'Slug:', ['class'=> 'form-spacing-top'])}}
{{Form::text('slug',null,["class" => 'form-control'])}}

{{Form::label('category_id', 'Category:', ['class' => 'form-spacing-top'])}}
{{Form::select('category_id', $categories, null, ['class' => 'form-control'])}}

{{Form::label('tags', 'Tags:', ['class' => 'form-spacing-top'])}}
{{Form::select('tags[]', $tags, null, ['class'=>'form-control select2-multi', 'multiple'=>'multiple'])}}

{{ Form::label('body', "Body:", ['class' => 'form-spacing-top']) }}
{{ Form::textarea('body', null, ["class" => 'form-control']) }}

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
                    {{ Form::submit('Save Changes', ['class' => 'btn btn-success']) }}
            </div>
        </div>
    
    </div>

</div>

{!! Form::close() !!}

</div>

@include('partials._javascript')

@stop()

@section('scripts')

  {!! Html::script('js/select2.min.js') !!}

  <script type="text/javascript">
  $('.select2-multi').select2();
  $('.select2-multi').select2().val({!! json_encode($post->tags()->allRelatedIds())
   !!}).trigger('change');

  </script>

@endsection()