<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'blog')</title>
    @yield('link')
</head>
<body class="bg-dark">
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
</body>
</html>
