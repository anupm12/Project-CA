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

    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Main Quill library -->
<script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

<!-- Theme included stylesheets -->
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

<!-- Core build with no theme, formatting, non-essential modules -->
<link href="//cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet">
<script src="//cdn.quilljs.com/1.3.6/quill.core.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Styles -->
    @yield('page-css')
<link rel="stylesheet" href="{{ asset('css/animate.css') }}" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" >
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"> --}}
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>



</head>
<body>
    <div id="app">
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light admin-nav">
            <a class="navbar-brand" href="."><img src="{{ asset('Images/Logo/logoWhite.svg') }}" alt="" class="black-logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span>
                    <i class="fas fa-bars" style="
                    color: #7de2d1;
                "></i>
            </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active mx-3">
                        <a class="nav-link cool-link custom-cursor" >Dashbord</a>
                    </li>
                    <li class="nav-item active mx-3">
                            <a class="nav-link cool-link custom-cursor" >About</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                        <li class="nav-item active mx-3">
                            <a class="nav-link cool-link custom-cursor" >Welcome<span> User Name</span></a>
                        </li>
                        <li class="nav-item active mx-3">
                                <a class="nav-link cool-link custom-cursor" >Log Out</a>
                        </li>
                </ul>

            </div>
        </nav>

        <main>
            @yield('content')

        </main>
    </div>

    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>

    @yield('page-script')
</body>
</html>
