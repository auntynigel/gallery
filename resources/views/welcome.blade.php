<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Neebles!</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="css/app.css" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Mark
                </div>

                <div class="links">
                    <a href="/about" aria-label="Read more all about me!">About</a>
                    <a href="/gallery" aria-label="Did I mention I enjoy photography?">Gallery</a>
                    <a href="/portfolio" aria-label="Read more about some of my work, not just look at it">Portfolio</a>
                    <a href="/blog" aria-label="Read more about my general ramblings">Blog</a>
                    <a href="/contact"aria-label="Get in touch with me">Contact</a>
                    <a href="https://github.com/auntynigel" target="_blank" aria-label="Go to my github repo">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
