<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Law') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                    <a class="nav-link" href="{{ route('ueberUns') }}">{{ __('über uns') }}</a>
                    <a class="nav-link" href="{{ route('leistungen') }}">{{ __('leistungen') }}</a>
                    <a class="nav-link" href="{{ route('kontakt') }}">{{ __('kontakt') }}</a>
                    <a class="nav-link" href="{{ route('impressum') }}">{{ __('impressum') }}</a>

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
                        @can('show-clients')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('clients') }}">
                                    {{ __('Klienten') }}
                                </a>
                            </li>
                        @endcan
                        @can('enter-appointments')
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route('appointments') }}" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ __('Termine') }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"> {{-- Here we have to add route/method/blade href="{{ route('appointments') }}"  --}}
                                        {{ __('Freigeben') }}
                                    </a>
                                    <a class="dropdown-item"> {{-- Here we have to add route/method/blade href="{{ route('appointments') }}"  --}}
                                        {{ __('Reserviert') }}
                                    </a>
                                </div>
                            </li>
                        @endcan
                        @can('manage-request')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('requests') }}">
                                    {{ __('Anfragen') }}
                                </a>
                            </li>
                        @endcan
                        @can('clients-documents')
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('documents') }}">
                                    {{ __('Dokumente') }}
                                </a>

                            </li>
                        @endcan
                        <li class="nav-item dropdown">

                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
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
