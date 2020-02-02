<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-primary">
        @auth
            <a class="sidebar-toggle text-light mr-3">
                <span class="navbar-toggler-icon"></span>
            </a>
        @endauth
        <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </nav>




    @auth
        <div class="d-flex">
                <nav class="sidebar">
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                        <li>
                            <a href="#submenu1" data-toggle="collapse">
                                <i class="fas fa-user"></i> Usuário
                            </a>
                            <ul id="submenu1" class="list-unstyled collapse">
                                <li><a href="listar.html"><i class="fas fa-users"></i> Usuários</a></li>
                                <li><a href="#"><i class="fas fa-key"></i> Nível de Acesso</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#submenu2" data-toggle="collapse"><i class="fas fa-list-ul"></i> Menu</a>
                            <ul id="submenu2" class="list-unstyled collapse">
                                <li><a href="#"><i class="fas fa-file-alt"></i> Páginas</a></li>
                                <li><a href="#"><i class="fab fa-elementor"></i> Item de Menu</a></li>
                            </ul>

                        </li>

                        <li><a href="#"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
                    </ul>
                </nav>
            @endauth
            <div class="content p-1">
                <div class="list-group-item">
                    @yield('content')
                </div>
            </div>
        </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script defer src="{{ asset('js/fontawesome-all.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>
