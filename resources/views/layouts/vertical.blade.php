<!DOCTYPE html>
<html @yield('html-attribute')>

<head>
    <!-- Title Meta -->
    <meta charset="utf-8" />
    <title>{{ $title }} | Halal Jamm Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Halal Jamm Admin Dashboard" />
    <meta name="author" content="Halal Jamm" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/images/favicon.ico">

    @yield('css')

    @vite(['resources/scss/app.scss', 'resources/scss/icons.scss'])

    @vite(['resources/js/config.js', 'resources/js/layout.js'])
</head>

<body>
    <!-- START Wrapper -->
    <div class="wrapper">

        @include('admin.layouts.partials.main-nav')
        @include('admin.layouts.partials.topbar')

        <!-- Start Content here -->
        <div class="page-container">

            <!-- Start Container Fluid -->
            <div class="page-content">

                @yield('content')

            </div>
            <!-- End Container Fluid -->

            @include('admin.layouts.partials.footer')

        </div>
        <!-- End Page Content -->

    </div>
    <!-- END Wrapper -->

    @vite('resources/js/app.js')

    @yield('scripts')

</body>

</html>