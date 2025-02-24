<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'My Porfolio')</title>
    </head>
    <body>
        @include('layout.menu')
        <main>
            @yield('content')
        </main>
    </body>
</html>
