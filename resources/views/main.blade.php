<!DOCTYPE html>
<html lang="{{str_replace('_','=',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title',config('app.name'))</title>
</head>
<body>

    @yield('content')

    <footer>
        <p>&copy; Copyright {{date('Y')}} &middot;
            <a href="/about-us" >About Us</a></p>
    </footer>
</body>
