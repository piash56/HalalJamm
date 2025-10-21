<!DOCTYPE html>
<html @yield('html-attribute')>

<head>
    <!-- Title Meta -->
    <meta charset="utf-8" />
    <title>{{ $title }} | Metor - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="A fully responsive premium Bootstrap admin dashboard template for modern web applications." />
    <meta name="author" content="FoxPixel" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="/images/favicon.ico">

    @yield('css')

    @vite(['resources/scss/app.scss', 'resources/scss/icons.scss'])

    @vite(['resources/js/config.js', 'resources/js/layout.js'])
</head>

<body>
    <!-- START Wrapper -->
    <div class="wrapper">

        @include('layouts.partials.components-nav')
        @include('layouts.partials.topbar')

        <!-- Start Content here -->
        <div class="page-container">

            <!-- Start Container Fluid -->
            <div class="page-content">

                @yield('content')

            </div>
            <!-- End Container Fluid -->

            @include('layouts.partials.footer')

        </div>
        <!-- End Page Content -->

    </div>
    <!-- END Wrapper -->

    @vite('resources/js/app.js')

    @yield('scripts')

</body>

</html>