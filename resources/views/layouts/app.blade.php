<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Eder') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Montserrat" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">
    @livewireStyles
</head>
<body>
    <div id="app">
        <main class="my-5">
            @yield('content')
        </main>
    </div>
    <script src="https://kit.fontawesome.com/b6ed169e1f.js" crossorigin="anonymous"></script>
<script>
    const modoSwitch = document.getElementById('modoSwitch');
    const htmlElement = document.querySelector('html');

    modoSwitch.addEventListener('change', () => {
        if (modoSwitch.checked) {
            htmlElement.setAttribute('data-bs-theme', 'dark');
        } else {
            htmlElement.setAttribute('data-bs-theme', 'light');
        }
    });
</script>
</body>
</html>
