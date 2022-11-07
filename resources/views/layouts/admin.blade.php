<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Aston Ecom</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ url('admin/images/favicon.ico') }}">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('admin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin/vendors/base/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ url('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ url('admin/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ url('admin/images/favicon.png') }}" />

    @livewireStyles
</head>

<body>
    <div class="container-scroller">
        @include('layouts.inc.admin.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('layouts.inc.admin.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>


    <!-- plugins:js -->
    <script src="{{ url('admin/vendors/base/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ url('admin/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ url('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ url('admin/js/off-canvas.js') }}"></script>
    <script src="{{ url('admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ url('admin/js/template.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ url('admin/js/dashboard.js') }}"></script>
    <script src="{{ url('admin/js/data-table.js') }}"></script>
    <script src="{{ url('admin/js/jquery.dataTables.js') }}"></script>
    <script src="{{ url('admin/js/dataTables.bootstrap4.js') }}"></script>


    @livewireScripts
</body>

</html>
