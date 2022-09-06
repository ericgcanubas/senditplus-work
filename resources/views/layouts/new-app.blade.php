<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatable-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mystyles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body class="bg-custom bg-background">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>
    <script src="{{ asset('js/Chart.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/demo/chart-area-demo.js') }}" defer></script>
    <script src="{{ asset('js/demo/chart-weekly.js') }}" defer></script>
    <script src="{{ asset('js/demo/chart-bar-demo.js') }}" defer></script>
    <script src="{{ asset('js/sample-datatables.js') }}" defer></script>
    <script src="{{ asset('js/datatables-simple-demo.js') }}" defer></script>
    <script src="{{ asset('js/datatables-simple-demo1.js') }}" defer></script>

    <script src="{{ asset('js/js/all.js') }}" crossorigin="anonymous" defer></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
    </div>
</div>
</body>
</html>
