<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/animate.css') }}" >
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light my-nav">
            <a class="navbar-brand" href=".">Brand</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active mx-3">
                        <a class="nav-link cool-link custom-cursor" onClick="document.getElementById('home-section').scrollIntoView();" >HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link cool-link custom-cursor"  onClick="document.getElementById('services-section').scrollIntoView();" >SERVICES</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            UPDATES
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"  onClick="document.getElementById('bulletin-section').scrollIntoView();" >BULLETIN</a>
                            <a class="dropdown-item" href="#">What's new</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item highlight-text custom-cursor">UPDATED EVERYDAY</a>
                        </div>
                    </li>
                    <!-- <li class="nav-item mx-3">
                        <a class="nav-link cool-link" href="#">BLOG</a>
                    </li> -->
                    <li class="nav-item mx-3">
                        <a class="nav-link cool-link custom-cursor"  onClick="document.getElementById('contact-section').scrollIntoView();" >CONTACT</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link cool-link custom-cursor" onClick="document.getElementById('about-section').scrollIntoView();" >ABOUT</a>
                    </li>
                </ul>

            </div>
        </nav>

        <main class="py-4">
            @yield('content')

        </main>
    </div>
    @yield('page-script')
</body>
</html>
