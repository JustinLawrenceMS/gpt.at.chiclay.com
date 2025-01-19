<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/jpeg" href="/favicon.jpg"/>
        <title>{{ config('app.name') }}</title>
        @vite('resources/css/app.css')
    </head>
    <body>
    <div id="app"></div>
    </body>
@vite('resources/js/app.js')
</html>
