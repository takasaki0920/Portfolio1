<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


    <title></title>
</head>
    <body>
    @include('layouts.nav')
    
    @yield('content')

    @include('layouts.fnav')
    </body>
</html>