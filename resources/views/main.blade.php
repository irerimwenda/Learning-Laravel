<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
    @include('partials._head')
    </head>

    <body>

    @include('partials._navs')

            <div class="content">

            @include('partials._messages')

                @yield('content')

                @include('partials._footer')
            </div>

        
        @yield('scripts')
    </body>
</html>
