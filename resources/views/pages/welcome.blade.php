@extends('main')

@section('title', '| Homepage')

@section('content')

            <div class="content">
                <div class="title m-b-md">
                    Hello! I am {{$mydata ['firstname']}}
                </div>
                <p>Welcome to my Laravel blog</p>

                <div class="links">
                    <a href="/">Home</a>
                    <a href="about">About</a>
                    <a href="contact">Contact</a>
                    <a href="create">Create</a>
                    
                </div>

                <div class="jumbotron">
                <div class="jumbotron-title m-b-md">
                    Begginer Expert at Laravel.
                </div>

                <p>Hello there! New to Laravel well don't worry. I'm gona guide you through the whole process. We are going to get from begginer level to expertise level. Feel at home and let's go down to coding the first laravel blog tutorial</p>
               <!-- <hr style="margin-left:20px;margin-right:20px">-->
                <button class="popular-post">Popular Post</button>
            </div>

            <div class="row">

                <div class="column left">

                    @foreach($posts as $post)

                    <div class="blog-content">
                        <div class="blog-title">{{ $post->title }}</div>
                        <p>{{ substr($post->body, 0, 300) }} {{ strlen($post->body) > 300 ? "..." : "" }}</p>
                        <a href="{{url('blog/'.$post->slug)}}" class="read-more">Read More</a>
                        <hr>
                    </div>

                    @endforeach

                </div>

                <div class="column right">
                    <div class="sidebar-title">Sidebar</div>
                </div>

            </div>

            </div>
            
@endsection()
