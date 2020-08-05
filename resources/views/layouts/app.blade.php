<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ASKLEPIOS - Plateforme de gestion de pharmacie</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/w3.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="fontawesome-5.10.1/css/all.css" rel="stylesheet">
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/img/favicon.ico" type="image/x-icon">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                @if(session()->get('success'))
                <a class="navbar-brand" href="{{ url('/welcome') }}">
                    @else
                <a class="navbar-brand" href="{{ url('/welcome') }}">
                    @endif
                    <img src="{{URL('/img/ASKLEPIOS.png')}}" height="30">
                    {{--{{ config('app.name', 'Laravel') }}--}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
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
                        @endif
                        @else
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ url('/welcome') }}">Accueil</a>--}}
                            {{--</li>--}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/medicaments') }}">Inventaire</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/clients') }}">Clients</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/ventes') }}">Ventes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/fournisseurs') }}">Fournisseurs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/medecins') }}">Médecins</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/register') }}">Nouvel utilisateur</a>
                                {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                            </li>



                            <li class="nav-item">
{{--                                <a class="nav-link" href="{{ url('/home') }}">Parametres</a>--}}
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <strong>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                    </strong>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
