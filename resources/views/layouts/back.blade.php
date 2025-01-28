<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Dashboard')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('back/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('back/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('back/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('back/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('back/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('back/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('back/assets/css/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('back/assets/images/favicon.png')}}" />
</head>

<body>
    <div class="container-scroller">
        @include('partials.navbardash')

        <div class="container-fluid page-body-wrapper">
            @include('partials.sidebardash')

            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                @include('partials.footerdash')
            </div>
        </div>
    </div>
    <script src="{{ asset('back/assets/vendors/js/vendor.bundle.base.js') }}">
    <script src="{{ asset('back/assets/vendors/chart.js/chart.umd.js') }}">
    <script src="{{ asset('back/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}">
    <script src="{{ asset('back/assets/js/off-canvas.js') }}">
    <script src="{{ asset('back/assets/js/hover.js') }}">
    <script src="{{ asset('back/assets/js/misc.js') }}">
    <script src="{{ asset('back/assets/js/settings.js') }}">
    <script src="{{ asset('back/assets/js/todolist.js') }}">
    <script src="{{ asset('back/assets/js/jquery.cookie.js') }}">
    <script src="{{ asset('back/assets/js/dashboard.js') }}">

</body>

</html>