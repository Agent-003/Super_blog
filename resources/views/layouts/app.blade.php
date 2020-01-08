<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS ================================================== -->
    <link rel="stylesheet" href="{{asset('css/all.css')}}"/>

    <!-- favicons ================================================== -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body id="top">
<!-- pageheader =============================================== -->
<section class="s-pageheader ">
    <header class="header">
        <div class="header__content row">
            <div class="header__logo">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <a class="logo" href="index.html">
                    <img src="images/logo.svg" alt="Homepage">
                </a>
            </div> <!-- end header__logo -->

            <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
            <nav class="header__nav-wrap">
                <h2 class="header__nav-heading h6">Site Navigation</h2>
                <ul class="header__nav">
                    <li class="current">
                        <a href="index.html" title="">Home</a>
                    </li>
                    <li class="has-children">
                        <a href="#0" title="">Categories</a>
                        <ul class="sub-menu">
                            <li><a href="{{route('list_categories')}}">Show categories</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#0" title="">Posts</a>
                        <ul class="sub-menu">
                            <li><a href="{{route('show_posts')}}">All posts</a></li>
                            <li><a href="{{route('create_post')}}">Create post</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#0" title="">Login / Register</a>
                        <ul class="sub-menu navbar-nav ml-auto">
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
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
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
                    </li>
                </ul> <!-- end header__nav -->

                <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>
            </nav> <!-- end header__nav-wrap -->
        </div> <!-- header-content -->
    </header> <!-- header -->
</section>

@yield('content')

</body>
<!-- script
================================================== -->
<script src="{{ asset('js/app.js') }}" defer></script>
</html>