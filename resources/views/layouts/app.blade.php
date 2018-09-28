<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CA</title>

    <!-- Scripts -->



    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top my-nav">
            <a class="navbar-brand pt-0 pb-0 mr-0 ml-0" href=".">
            <img src="Images/Logo/logoBlack.svg" alt="" style="width:15rem; height:3rem ;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span>
                        <i class="fas fa-bars"></i>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active mx-3">
                        <a class="nav-link cool-link custom-cursor" onClick="document.getElementById('home-section').scrollIntoView();" >HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link cool-link custom-cursor"  onClick="document.getElementById('services-section').scrollIntoView();" >SERVICES</a>
                    </li>
                    <li class="nav-item mx-3 dropdown">
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
<script src="{{ asset('js/app.js') }}" ></script>
    @yield('page-script')

</html>
