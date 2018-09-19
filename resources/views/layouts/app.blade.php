<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CA</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light my-nav">
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


        <main>
            @yield('content')
        </main>
    </div>

</body>
<script src="{{ asset('js/jquery.newsTicker.min.js') }}"></script>

</html>
