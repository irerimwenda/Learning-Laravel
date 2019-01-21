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
                    <div class="blog-content">
                        <div class="blog-title">Lesson 1</div>
                        <p>This is the new lesson man. You have to get it right and then do as I tell you. Laravel works in an M-V-C patter architectural design. Well that's first thing to note</p>
                        <button class="read-more">Read More</button>
                        <hr>
                    </div>

                    <div class="blog-content">
                        <div class="blog-title">Lesson 1</div>
                        <p>This is the new lesson man. You have to get it right and then do as I tell you. Laravel works in an M-V-C patter architectural design. Well that's first thing to note</p>
                        <button class="read-more">Read More</button>
                        <hr>
                    </div>

                    <div class="blog-content">
                        <div class="blog-title">Lesson 1</div>
                        <p>This is the new lesson man. You have to get it right and then do as I tell you. Laravel works in an M-V-C patter architectural design. Well that's first thing to note</p>
                        <button class="read-more">Read More</button>
                        <hr>
                    </div>

                    <div class="blog-content">
                        <div class="blog-title">Lesson 1</div>
                        <p>This is the new lesson man. You have to get it right and then do as I tell you. Laravel works in an M-V-C patter architectural design. Well that's first thing to note</p>
                        <button class="read-more">Read More</button>
                        <hr>
                    </div>

                    <div class="blog-content">
                        <div class="blog-title">Lesson 1</div>
                        <p>This is the new lesson man. You have to get it right and then do as I tell you. Laravel works in an M-V-C patter architectural design. Well that's first thing to note</p>
                        <button class="read-more">Read More</button>
                        <hr>
                    </div>

                    <div class="blog-content">
                        <div class="blog-title">Lesson 1</div>
                        <p>This is the new lesson man. You have to get it right and then do as I tell you. Laravel works in an M-V-C patter architectural design. Well that's first thing to note</p>
                        <button class="read-more">Read More</button>
                        <hr>
                    </div>

                    <div class="blog-content">
                        <div class="blog-title">Lesson 1</div>
                        <p>This is the new lesson man. You have to get it right and then do as I tell you. Laravel works in an M-V-C patter architectural design. Well that's first thing to note</p>
                        <button class="read-more">Read More</button>
                        <hr>
                    </div>

                </div>

                <div class="column right">
                    <div class="sidebar-title">Sidebar</div>
                </div>

            </div>

            </div>
            
@endsection()
