<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Civestt</title>

    <!-- Scripts -->



    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="{{ asset('css/hover-min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top my-nav box-border box-boder-mb">
            <a class="navbar-brand pt-0 pb-0 mr-0 ml-0" href=" {{ route('welcome')  }}  ">
            <img src="{{ asset('Images/Logo/logoBlack.svg') }}" alt="" class="black-logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span>
                        <i class="fas fa-bars"></i>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item mx-3  ">
                        <a href=" {{ route('welcome')  }}" class="nav-link cool-link {{ Request::is('/') ? 'active-nav' : '' }}"><i class="fas fa-home pr-1"></i>Home</a>
                    </link>
                    <li class="nav-item mx-3  ">
                        <a href=" {{ route('allservices')  }}" class="nav-link cool-link {{ Request::is('all-services') ? 'active-nav' : '' }}"><i class="fas fa-cogs pr-1"></i>Services</a>
                    </li>
                    <li class="nav-item mx-3 dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-sync-alt pr-1"></i>Updates
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" onClick="document.getElementById('bulletin-section').scrollIntoView();">BULLETIN</a>
                            <a class="dropdown-item" href="#">What's new</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item highlight-text">UPDATED EVERYDAY</a>
                        </div>
                    </li>
                    <!-- <li class="nav-item mx-3">
                        <a class="nav-link cool-link" href="#">BLOG</a>
                    </li> -->
                    <li class="nav-item mx-3  ">
                        <a href=" {{ route('contact')  }}" class="nav-link cool-link {{ Request::is('contact-us') ? 'active-nav' : '' }}"><i class="fas fa-phone-volume pr-1"></i>Contact</a>
                    </li>
                    <li class="nav-item mx-3  ">
                        <a class="nav-link cool-link" href=" {{ route('about')  }} {{ Request::is('about-us') ? 'active-nav' : '' }}"><i class="fas fa-male pr-1"></i>About</a>
                    </li>

                      <!-- Authentication Links -->
                      @guest
                      <li class="nav-item custom-center pr-2 pr-mb-0">
                          <a style="background:#53C7F0 !important;font-weight:500; padding: 0.25rem 0.5rem !important;" class="nav-link btn btn-custom btn-sm btn-mb" href="{{ route('login') }}"><i class="fas fa-sign-in-alt pr-1"></i>{{ __('Login') }}</a>
                      </li>
                      <li class="nav-item custom-center pt-mb-3">
                          <a style="background:#FC427B !important;font-weight:500; padding: 0.25rem 0.5rem !important;" class="nav-link btn btn-custom btn-sm btn-mb" href="{{ route('register') }}"><i class="fas fa-user pr-1"></i>{{ __('Register') }}</a>
                      </li>
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @if( !Auth::user()->email_verified_at )
                                    <i class="fas fa-circle dot" style="transform: translate(36%,-76%);font-size: 10px;"></i>
                                @endif
                                {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if( !Auth::user()->email_verified_at )

                                    <a class="dropdown-item" href="{{ route('verify.message') }}">Verify</a>
                                @endif
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
