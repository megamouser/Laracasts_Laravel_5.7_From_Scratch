<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'title page')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
    <style>
        .is-complete {
            text-decoration: line-through;
        }
    </style>
</head>
<body>
    @yield('content')
    @yield('script')
</body>
</html>