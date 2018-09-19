<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="author" content="Jonathan Torres">
        <meta name="description" content="Personal website of Jonathan Torres. A Web Developer.">
        <link rel="stylesheet" href="/css/main.css">

        <title>Jonathan Torres | Web Developer</title>
    </head>
    <body>
        @include('_partials.nav')

        <div class="container">
            @yield('body')
            @include('_partials.footer')
        </div>

        @include('_partials.scripts')
    </body>
</html>
