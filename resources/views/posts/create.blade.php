@extends('main')

@section('title', '| Create New Post')

@include('partials._css')

@section('stylesheets')
<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>


<script>
tinymce.init({
  selector: 'textarea'
});
</script>

@endsection()

@section('content')

<div class="create-post row">
    <div class="col-md-8 col-md-offset-2 mx-auto">
        
        <h1>Create New Post</h1>
        <hr>
        
        {!! Form::open(['route' => 'post.store', 'data-parsley-validate' =>'', 'files'=>true]) !!}
          {{ Form::label('title', 'Title:', ['style'=>'font-weight:bold']) }}
          {{ Form::text('title',null,array('class' => 'form-control', 'required' => '','maxlength' => '200'))}}

           {{ Form::label('slug', 'Slug:', ['style'=>'font-weight:bold'])}}
           {{ Form::text('slug',null,array('class'=>'form-control', 'required' => '', 'minlength'=>'5', 'maxlength'=>'255'))}}

          {{ Form::label('category_id', 'Category', ['style'=>'font-weight:bold'])}}
          <select class="form-control" name="category_id">
          
          @foreach($categories as $category)
            <option value='{{$category->id}}'>{{$category->name}}</option>
            @endforeach

          </select><br>

          {{ Form::label('tags', 'Tags:', ['style'=>'font-weight:bold'])}}
          <select class="form-control select2-multi" name="tags[]" multiple="multiple">
          
          @foreach($tags as $tag)
            <option value='{{$tag->id}}'>{{$tag->name}}</option>
            @endforeach

          </select><br><br>

          {{Form::label('featured_image', 'Upload featured image')}}
          {{Form::file('featured_image')}}
<br>
          {{ Form::label('body', "Post Body:", ['style'=>'font-weight:bold'])}}
          {{ Form::textarea('body', null,array('class'=>'form-control'))}}
        
          {{ Form::submit('Create Post',array('class'=>'btn btn-info btn-lg', 'style'=>'margin-top:20px;'))}}
        {!! Form::close() !!}

    </div>
</div>

@include('partials._javascript')

@stop()

@section('scripts')

  {!! Html::script('js/select2.min.js') !!}

  <script type="text/javascript">
  $('.select2-multi').select2();
  </script>

@endsection()