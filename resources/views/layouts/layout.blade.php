<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="https://getbootstrap.jp/docs/5.3/assets/css/docs.css" rel="stylesheet"> -->
    <title>@yield('title')</title>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
    
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
    <header>
    @include('layouts.nav')
    </header>
    <body>
        <div class="conteiner p-5 ">
        
        
        @yield('content')

        
        </div>
    </body>
    <footer>
    @include('layouts.footer')
    </footer>
</html>