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
    <style>
        .loader-container {
            width: 100%;
            height: 100vh;
            position: fixed;
            background: #000
        url("https://media.giphy.com/media/8agqybiK5LW8qrG3vJ/giphy.gif") center
        no-repeat;
    z-index: 1;
}
.spinner {
    width: 64px;
    height: 64px;
    border: 8px solid;
    border-color: #3d5af1 transparent #3d5af1 transparent;
    border-radius: 50%;
    animation: spin-anim 1.2s linear infinite;
}

@keyframes spin-anim {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
.loader-container {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    background:#fff;
    z-index: 1;
}
.loader-container-hidden {
    display: none;
}

        </style>
</head>
<div class="loader-container">
    <div class="spinner"></div>
</div>
<body class="bg-custom bg-background">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>
    {{-- <script src="{{ asset('js/Chart.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/demo/chart-area-demo.js') }}" defer></script>
    <script src="{{ asset('js/demo/chart-weekly.js') }}" defer></script>
    <script src="{{ asset('js/demo/chart-bar-demo.js') }}" defer></script>
    <script src="{{ asset('js/sample-datatables.js') }}" defer></script>
    <script src="{{ asset('js/datatables-simple-demo.js') }}" defer></script>
    <script src="{{ asset('js/datatables-simple-demo1.js') }}" defer></script> --}}

    <script src="{{ asset('js/js/all.js') }}" crossorigin="anonymous" defer></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>

    <script>
        const loaderContainer = document.querySelector('.loader-container');
        window.addEventListener('load', () => {
            loaderContainer.parentElement.removeChild(loaderContainer);
        });


                    </script>
    </div>
</div>
</body>
</html>
