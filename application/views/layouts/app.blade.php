<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DMS - @yield('page_title')</title>

    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="{{ base_url('assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ base_url('assets/vendor/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ base_url('assets/vendor/tributejs/tribute.css') }}">
    <!-- END PLUGINS STYLES -->

    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="{{ base_url('assets/css/theme.min.css') }}" data-skin="default">
    <link rel="stylesheet" href="{{ base_url('assets/css/theme-dark.min.css')  }}" data-skin="dark">
    <link rel="stylesheet" href="{{ base_url('assets/css/custom.css') }}"><!-- Disable unused skin immediately -->

    <script>
        var skin = localStorage.getItem('skin') || 'default';
        var unusedLink = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
        unusedLink.setAttribute('rel', '');
        unusedLink.setAttribute('disabled', true);
    </script><!-- END THEME STYLES -->
</head>
<body>

<div class="app">
    @include('layouts.components.header')
    @include('layouts.components.sidebar')

    <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
            @include('layouts.components.flash')
            @yield('content')
        </div><!-- /.wrapper -->
    </main>
</div>

<script src="{{ base_url('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ base_url('assets/vendor/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ base_url('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- END BASE JS -->
<!-- BEGIN PLUGINS JS -->
<script src="{{ base_url('assets/vendor/pace/pace.min.js') }}"></script>
<script src="{{ base_url('assets/vendor/stacked-menu/stacked-menu.min.js') }}"></script>
<script src="{{ base_url('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ base_url('assets/vendor/tributejs/tribute.min.js') }}"></script>
<script src="{{ base_url('assets/vendor/chart.js/Chart.min.js') }}"></script>
@stack('js')
<!-- BEGIN THEME JS -->
<script src="{{ base_url('assets/js/theme.min.js') }}"></script> <!-- END THEME JS -->
</body>
</html>