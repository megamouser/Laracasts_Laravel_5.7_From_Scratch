<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'title page')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
</head>
<body>
    <div class="container">
        @yield('header')
        
        <ul>
            <li><a href="/">home</a></li>
            <li><a href="about">about</a></li>
            <li><a href="contact">contact</a></li>
            <li><a href="projects">projects</a></li>
        </ul>
        
        @yield('content')
        @yield('script')
    </div>
</body>
</html>