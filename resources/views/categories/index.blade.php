@extends ('main')

@section('title', '| All Categories')

@section('content')

<div style="margin-top:80px" class="row">
    <div class="col-md-8 mx-auto">
        <h1>Categories</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                </tr>
            </thead>

            <tbody>
                @foreach($categories as $category)
                <tr>
                    <th>{{ $category->id }}</th>
                    <th>{{ $category->name }}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="col-md-3">
        <div class="category-well">

            {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}

            <h2>New Category</h2>
            {{ Form::label('name', 'Name:' ) }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}

            {{ Form::submit('Create New Category', ['class'=>'form-spacing-top btn btn-block btn-info']) }}

            {!! fORM::close() !!}

        </div>
    </div>

</div>


@stop()