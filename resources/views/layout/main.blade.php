<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('head')
    @vite('resources/js/app.js')
</head>
<body>
    @include('components.header')
    @yield('content')
    @include('components.footer')
</body>
</html>