
<div class="flex-center position-ref full-height">
           
                <div class="top-right links">
                
                <a href="/blog">Blog</a>
               

                @if (Auth::check())
                 <a href="/home">Home</a>

                <a href="{{route('post.index')}}">Posts</a>
          

                 @else

                 <a href="{{route('login')}}">Login</a>

                <a href="{{ route('register') }}">Register</a>

                 @endif
                </div>
           


            