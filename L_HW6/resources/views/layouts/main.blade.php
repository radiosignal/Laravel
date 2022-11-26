<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>@section('title')Page@show</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
@yield('menu')
@yield('content')
</body>
</html>
