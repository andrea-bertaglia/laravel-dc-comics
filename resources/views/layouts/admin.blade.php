<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
@vite('resources/js/app.js')

<body>
    <header class="bg-body-secondary">
        @include('partials.admin_header')
    </header>

    @yield('content')
</body>

</html>
