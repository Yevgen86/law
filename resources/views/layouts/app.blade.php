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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="{{ asset('js/jquery.quicksearch.js') }}"></script>
    <script src="https://kit.fontawesome.com/8f2286b658.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('style')
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img width=120" src="{{ URL::to('/images/logo.png') }}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                    <a class="nav-link {{ Request::is('ueberUns') ? 'active' : '' }}" href="{{ route('ueberUns') }}">{{ __('über uns') }}</a>
                    <a class="nav-link {{ Request::is('leistungen') ? 'active' : '' }}" href="{{ route('leistungen') }}">{{ __('leistungen') }}</a>
                    <a class="nav-link {{ Request::is('kontakt') ? 'active' : '' }}" href="{{ route('kontakt') }}">{{ __('kontakt') }}</a>
                    <a class="nav-link {{ Request::is('impressum') ? 'active' : '' }}" href="{{ route('impressum') }}">{{ __('impressum') }}</a>

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('register') ? 'active' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        @can('show-clients')
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('clients') ? 'active' : '' }}" href="{{ route('clients') }}">
                                    {{ __('Klienten') }}
                                </a>
                            </li>
                        @endcan
                        @can('enter-appointments')
                               {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('appointments') }}">
                                        {{ __('Termine') }}
                                    </a>
                                </li>--}}
                            {{--<li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route('appointments') }}" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ __('Termine') }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item">
                                        {{ __('Freigeben') }}
                                    </a>
                                    <a class="dropdown-item">
                                        {{ __('Reserviert') }}
                                    </a>
                                </div>
                            </li>--}}
                        @endcan
                        @can('manage-request')
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('contacts') ? 'active' : '' }}" href="{{ route('contacts') }}">
                                    {{ __('Anfragen') }}
                                </a>
                            </li>
                        @endcan
                        <li class="nav-item dropdown">

                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                @can('show-my-appointment', 'cancel-appointment')
                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                        {{ __('Meine Termine') }}
                                    </a>
                                @endcan
                                @can('reserve-appointment')
                                    <a class="dropdown-item" href="#">
                                        {{ __('Termin Reservieren') }}
                                    </a>
                                @endcan
                                @can('show-my-appointment')
                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                        {{ __('Mein Account') }}
                                    </a>
                                @endcan
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

<script>
    jQuery(document).ready(function ($) {
        $(function () {
            $('input#search').quicksearch('table tbody tr', {
                matchedResultsCount: 0,
                bind: 'keyup search',
                resetBind: 'reset'
            });
        });
    });
</script>
</body>
</html>
