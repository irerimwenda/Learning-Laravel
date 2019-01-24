@extends ('main')

@section('title', '| All Tags')

@section('content')

<div style="margin-top:80px" class="row">
    <div class="col-md-8 mx-auto">
        <h1>Tags</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                </tr>
            </thead>

            <tbody>
                @foreach($tags as $tag)
                <tr>
                    <th>{{ $tag->id }}</th>
                    <th><a href="{{ route('tags.show', $tag->id) }}"> {{ $tag->name }} </a></th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="col-md-3">
        <div class="category-well">

            {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}

            <h2>New Tag</h2>
            {{ Form::label('name', 'Name:' ) }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}

            {{ Form::submit('Create New Tag', ['class'=>'form-spacing-top btn btn-block btn-info']) }}

            {!! fORM::close() !!}

        </div>
    </div>

</div>


@stop()