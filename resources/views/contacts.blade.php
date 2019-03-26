<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
    <ul>
    <li>{{ $name }}</li>
    <li>arunas@smala.lt</li>
    <li>+37060797432</li>
    <li>Interests
    <ul>
    @foreach ($interests as $interest)
    <li>{{ $interest }}</li>
    @endforeach
    </ul>
    </li>
    </ul>
    </body>
</html>
