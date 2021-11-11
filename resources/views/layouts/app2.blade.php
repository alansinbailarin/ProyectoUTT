<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav mr-auto">

                         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Edificios
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <a class="dropdown-item" href="{{ route('edificios.index') }}">{{ __('Edificios') }}</a>
                                <a class="dropdown-item" href="{{ route('plantas.index') }}">{{ __('Plantas') }}</a>
                                <a class="dropdown-item" href="{{ route('areas.index') }}">{{ __('Areas') }}</a>
                            </div>
                            </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('resguardos.index') }}">{{ __('Resguardos') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('prestamos.index') }}">{{ __('Prestamos') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('tipoaltas.index') }}">{{ __('Tipo Alta') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('estados.index') }}">{{ __('Estados') }}</a>
                                </li>
                                <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categorias
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <a class="dropdown-item"  href="{{ route('categorias.index') }}">{{ __('Categorias') }}</a>
                                <a class="dropdown-item" href="{{ route('subcategorias.index') }}">{{ __('Subcategorias') }}</a>
                            </div>
                            </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('marcas.index') }}">{{ __('Marcas') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('modelos.index') }}">{{ __('Modelos') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('productos.index') }}">{{ __('Productos') }}</a>
                                </li>


                    </ul> -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>
