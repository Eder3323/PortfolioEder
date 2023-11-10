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
    <link rel="stylesheet" href="/css/styles.css" id="modoClaro">
    <link rel="stylesheet" href="/css/styles-dark.css" id="modoOscuro" disabled>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
<header class="navbar navbar-expand-md fixed-header navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img class="img-thumbnail img-fluid w-100 my_img_thumbnail rounded-3" style="max-width: 120px;" src="{{asset('images/EDEV.png')}}" alt="eder" >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#inicio"><h5 class="my_text_white">Inicio</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#proyectos"><h5 class="my_text_white">Proyectos</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#habilidades"><h5 class="my_text_white">Habilidades</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about"><h5 class="my_text_white">Sobre Mí</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacto"><h5 class="my_text_white">Contacto</h5></a>
                </li>
            </ul>
        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="modoSwitch" checked>
            <label class="form-check-label my_text_blue" for="modoSwitch">Modo Oscuro</label>
        </div>
    </div>
</header>
    <div id="app">
        <main class="my-5">
            @yield('content')
        </main>
    </div>
{{--@livewireScriptConfig--}}
{{--    <script src="https://kit.fontawesome.com/b6ed169e1f.js" crossorigin="anonymous"></script>--}}
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
