<!DOCTYPE html>
<html lang="en" @yield('html_attribute')>

<head>
    <!-- Title Meta -->
    <meta charset="utf-8" />
    <title>{{ $title }} | Halal Jamm Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Halal Jamm Admin Dashboard" />
    <meta name="author" content="Halal Jamm" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="/images/favicon.ico">

    @yield('css')

    @vite(['resources/scss/app.scss', 'resources/scss/icons.scss'])

    @vite(['resources/js/config.js', 'resources/js/layout.js'])

</head>

<body @yield('body_attribute')>

    @yield('content')

    @vite('resources/js/app.js')

    @yield('scripts')

</body>

</html>