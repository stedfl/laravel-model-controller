<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BoolFlix @yield('title')</title>
    <link rel='icon shortcut' href='{{asset('img/favicon.ico')}}' type="image/x-icon">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')

</body>
</html>
