<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>LotoCity</title>
</head>
<body>
    <div>LotoCity</div>
    <x-geo-map :geomap="$geomap" />
</body>
</html>
