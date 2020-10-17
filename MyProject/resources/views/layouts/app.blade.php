<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="icon" href="{{asset('img/favicon.png')}}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!-- animate CSS -->
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <!-- themify CSS -->
        <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
        <!-- font awesome CSS -->
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <!-- swiper CSS -->
        <link rel="stylesheet" href="{{asset('css/slick.css')}}">
        <!-- style CSS -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
    </head>
    <body>
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand btn_1" href="{{route('dashboard')}}">Online Smartboard Games </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                             id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                @if (Route::has('login'))
                                    @auth
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{route('dashboard')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('games')}}">Games</a>
                                    </li>
                                        <x-jet-dropdown align="right" width="48">
                                            <x-slot name="trigger">
                                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                                </button>
                                            </x-slot>

                                            <x-slot name="content">
                                                <!-- Account Management -->
                                                <div class="block px-4 py-2 text-xs text-gray-400">
                                                    {{ __('Manage Account') }}
                                                </div>

                                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                                    {{ __('Profile') }}
                                                </x-jet-dropdown-link>

                                                <div class="border-t border-gray-100"></div>

                                                <!-- Team Management -->
                                                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                                        {{ __('Manage Team') }}
                                                    </div>

                                                    <!-- Team Settings -->
                                                    <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                                        {{ __('Team Settings') }}
                                                    </x-jet-dropdown-link>

                                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                                        <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                                            {{ __('Create New Team') }}
                                                        </x-jet-dropdown-link>
                                                    @endcan

                                                    <div class="border-t border-gray-100"></div>

                                                    <!-- Team Switcher -->
                                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                                        {{ __('Switch Teams') }}
                                                    </div>

                                                    @foreach (Auth::user()->allTeams() as $team)
                                                        <x-jet-switchable-team :team="$team" />
                                                    @endforeach

                                                    <div class="border-t border-gray-100"></div>
                                            @endif
                                                @if(\Illuminate\Support\Facades\Auth::user()->role == 'a')
                                                <x-jet-dropdown-link href="{{ route('adminPanel') }}">
                                                    {{ __('Admin Panel') }}
                                                </x-jet-dropdown-link>
                                                @endif

                                            <!-- Authentication -->
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                                                         onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                                        {{ __('Logout') }}
                                                    </x-jet-dropdown-link>
                                                </form>
                                            </x-slot>
                                        </x-jet-dropdown>

                                    @else
                                        <li class="nav-item active">
                                            <a class="nav-link" href="{{route('dashboard')}}">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('login')}}">Games</a>
                                        </li>
                                        <li class="d-none d-lg-block">
                                            <a class="btn_1" href="{{ route('login') }}">Login</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="d-none d-lg-block">
                                                <a class="btn_1" href="{{ route('register') }}">Register</a>
                                            </li>
                                        @endif
                                    @endif
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div style="margin-top: 10rem">
        @yield('content')
    </div>


        @livewireScripts
    </body>
</html>
