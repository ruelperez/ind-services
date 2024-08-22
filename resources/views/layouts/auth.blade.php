<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>{{ $title ?? '' }}</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

    @stack('css')
</head>
    <body class="account-page">

    <div class="main-wrapper">
        @yield('content')
    </div>


    <script src="{{ asset('admin/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('admin/js/feather.min.js') }}"></script>

    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('admin/js/script.js') }}"></script>

    <script src="{{ asset('js/global.js') }}"></script>

    @stack('js')
</body>
</html>
