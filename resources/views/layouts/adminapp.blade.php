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
<link rel="stylesheet" href="{{ asset('css/sb-admin.min.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" >
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"> --}}
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>



</head>
<body>
    <div id="app">
         <nav class="navbar navbar-expand navbar-dark bg-dark static-top admin-nav">

      <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>


      <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

     <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav list-group-custom box-border">
        <li class="nav-item text-center" style="background:#e8eef8 !important;">
                <svg class=" mr-2 mt-2 circle-all about__header box-border circle-all-admin" style="backgroud:#f5f6fa !imporatant;">
                        <use xlink:href="{{ asset('Images/Face/avatar.svg#icon-').Auth::guard('admin')->user()->avatar }}">
                        </use>
                </svg>
                <p class="admin-sidebar-name" style="text-transform:capitalize;">{{ Auth::guard('admin')->user()->name }}</p>
                <p class="admin-sidebar-icon" style="font-size:18px;">
                    <span class="pr-1 admin-sidebar-icon-padding">
                    <a href="{{ route('admin.setting') }}" class="nav-link d-inline" data-placement="bottom" data-toggle="tooltip" title="Setting">
                            <i class="fas fa-sliders-h" style="color:#5c8df6;"></i>
                        </a>
                    </span>
                    <span class="pr-1 admin-sidebar-icon-padding">
                        <a href="{{ route('admin.logout') }}" class="nav-link d-inline" data-placement="bottom" data-toggle="tooltip" title="Logout">
                            <i class="fas fa-power-off" style="color:#454b57;"></i>
                        </a>
                    </span>
                    <span>
                        <a href="" class="nav-link d-inline" data-placement="bottom" data-toggle="tooltip" title="Info">
                            <i class="fas fa-info-circle" style="color:#f53b57;"></i>
                        </a>
                    </span>
                </p>
        </li>
        <li class="nav-item {{ Request::is('admin/home') ? 'active' : '' }} mt-3" style="{{ Request::is('admin/home') ? 'border-color:#1e90ff;' : '' }}">
            <a href="{{ route('admin.home') }}" class="nav-link"><i class="fas fa-tachometer-alt" style="color:#1e90ff !important;"></i><span>Dasboard</span></a>
        </li>
        <li class="nav-item {{ Request::is('admin/hero') ? 'active' : '' }}" style="{{ Request::is('admin/hero') ? 'border-color:#12CBC4;' : '' }}">
        <a href="{{ route('admin.hero') }}" class="nav-link" ><i class="fas fa-file" style="color:#12CBC4 !important;"></i><span>Hero
            Section</span></a>
        </li>
        <li class="nav-item {{ Request::is('admin/about') ? 'active' : '' }}" style="{{ Request::is('admin/about') ? 'border-color:#f53b57;' : '' }}">
        <a href="{{ route('admin.about') }}" class="nav-link"><i class="fas fa-user-circle" style="color:#f53b57 !important;"></i><span>About</span></a>
        </li>
        <li class="nav-item {{ Request::is('admin/inbox') ? 'active' : '' }}" style="{{ Request::is('admin/download') ? 'border-color:#3c40c6;' : '' }}">
            <a href="{{ route('admin.inbox') }}" class="nav-link"><i class="fas fa-envelope" style="color:#03A9F4 !important;"></i></i><span>Inbox</span></a>
        </li>
        <li class="nav-item {{ Request::is('admin/message/favorite') ? 'active' : '' }}" style="{{ Request::is('admin/message/favorite') ? 'border-color:#eb4d4b;' : '' }}">
            <a href="{{ route('admin.message.favorite') }}" class="nav-link"><i class="fas fa-heart"  style="color:#eb4d4b !important;'"></i><span>Favorite</span></a>
        </li>
        <li class="nav-item {{ Request::is('admin/news') ? 'active' : '' }}" style="{{ Request::is('admin/download') ? 'border-color:#3c40c6;' : '' }}">
        <a href="{{ route('admin.news') }}" class="nav-link"><i class="fas fa-newspaper" style="color:#1e272e !important; margin-right: 0.25rem;"></i><span>News</span></a>
        </li>
        <li class="nav-item {{ Request::is('admin/download') ? 'active' : '' }} " style="{{ Request::is('admin/download') ? 'border-color:#3c40c6;' : '' }}">
            <a href="{{ route('admin.download') }}" class="nav-link"><i class="fas fa-arrow-circle-down" style="color:#3c40c6 !important;"></i><span>Download</span></a>
        </li>
        <li class="nav-item {{ Request::is('admin/users') ? 'active' : '' }} " style="{{ Request::is('admin/users') ? 'border-color:#ffa801 ;' : '' }}">
            <a href="{{ route('admin.users') }}" class="nav-link" ><i class="fas fa-users" style="color:#ffa801 !important;"></i> <span>Users</span></a>
        </li>
        <li class="nav-item {{ Request::is('admin/services') ? 'active' : '' }} {{ Request::is('admin/services/add') ? 'active' : '' }}" style="{{ Request::is('admin/services') ? 'border-color:#05c46b ;' : '' }}">
        <a href="{{ route('admin.services') }}" class="nav-link" ><i class="fas fa-cogs" style="color:#05c46b  !important;"></i><span>Services</span></a>
        </li>
        <li class="nav-item {{ Request::is('admin/social') ? 'active' : '' }}" style="{{ Request::is('admin/social') ? 'border-color:#C4E538;' : '' }}">
            <a href="{{ route('admin.social') }}" class="nav-link"><i class="fab fa-twitter" style="color:#C4E538;"></i><span>Social Media Links</span></a>
        </li>
        <li class="nav-item {{ Request::is('admin/contact') ? 'active' : '' }}" style="{{ Request::is('admin/contact') ? 'border-color:#e056fd;' : '' }}">
        <a href="{{ route('admin.contact') }}" class="nav-link"><i class="fas fa-address-card" style="color:#e056fd !important;">
            </i><span>Contact</span>
        </a>
        </li>
      </ul>


            @yield('content')

    </div>
    </div>

    <script src="{{ asset('js/sb-admin.min.js') }}" ></script>
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    @yield('page-script')
</body>
</html>
