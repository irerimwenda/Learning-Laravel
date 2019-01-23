
<div class="flex-center position-ref full-height">
           
                <div class="top-right links">
                
                <a href="/blog">Blog</a>
               

                @if (Auth::check())
                 <a href="/home">Home</a>

                <a href="{{route('post.index')}}">Posts</a>

                <a href="{{route('categories.index')}}">Categories</a>
          
                <a href="{{route('logout')}}">Logout</a>

                 @else

                 <a href="{{route('login')}}">Login</a>

                <a href="{{ route('register') }}">Register</a>

                 @endif
                </div>
           


            