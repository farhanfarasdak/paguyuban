<!doctype html>
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ URL::secure('src/css/main.css') }}">
        @yield('styles')
    </head>
    <body>
        @include('includes.header')
        <div class = "main">
            @yield('content')
            <div class = "centered">
                @yield('content2')
            </div>    
        </div>
    </body>
</html>