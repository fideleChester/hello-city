<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("style.css")}}">
    <title>@yield('title',config('app.name'))</title>
</head>
<body>
    <div class="main">
        @yield('content')
    </div>


    <footer>
        <p id="copy">&copy; Copyright {{date('Y')}} &middot;
            @if (! Route::is('about'))
                <a href="{{route('about')}}" >About Us</a></p>
            @endif

    </footer>
</body>
