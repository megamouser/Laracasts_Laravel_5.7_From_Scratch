<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'title page')</title>
</head>
<body>
    @yield('header')
    <ul>
        <li><a href="/">home</a></li>
        <li><a href="about">about</a></li>
        <li><a href="contact">contact</a></li>
    </ul>
</body>
</html>