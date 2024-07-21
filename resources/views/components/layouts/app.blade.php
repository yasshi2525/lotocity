<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', Config::get('app.locale')) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>宝くじ全プッシュの街</title>
    </head>
    <body>
        <x-menu :$active />
        {{ $slot }}
    </body>
</html>
