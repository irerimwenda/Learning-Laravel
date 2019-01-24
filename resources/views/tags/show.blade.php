@extends ('main')

@section('title', "| $tag->name Tag")

@section('content')

<div class="row" style="margin-top:80px">

<div class="col-md-8">
    <h1>  {{ $tag->name }} Tag <small style="font-size:20px">( {{$tag->posts()->count()}} Posts)</small> </h1>
</div>

<div class="col-md-2">
<a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-info pull-right">Edit</a>
</div>

<div class="col-md-2">
{{ Form::open(['route' => ['tags.destroy', $tag->id], 'method'=>'DELETE']) }}
{{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
</div>


</div>

<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Tags</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach($tag->posts as $post)
                <tr>
                <th>{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td> @foreach($post->tags as $tag)
                <span class="badge badge-info"> {{ $tag->name }} </span>
                @endforeach
                </td>

                    <td><a href="{{ route('post.show', $post->id)}}" class="btn btn-sm btn-success">View</a>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop()