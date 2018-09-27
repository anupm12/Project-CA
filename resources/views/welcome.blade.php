@extends('layouts.app')

@section('content')

<!-- <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
    @endif -->


<div class="row no-row hero-section" id="home-section">
    <div class="col-xs-12 col-md-8 order-md-12 no-col">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="Images/Carousel/img1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Images/Carousel/img1.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Images/Carousel/img1.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="col-md-4 order-md-1 hero-section__text mx-auto">
        <div>
            <h2>Experts here</h2>
            <h3>Experience, <b class="highlight-text">Knowledge, </b> Dedication is what we emphasize on.</h3>
            <p class="hero-section__social-text">Know us better</h5><br>
                <a href="#">
                    <svg class="hero-section__icon mr-2 mt-2">
                        <use xlink:href="Images/sprite.svg#icon-facebook">
                        </use>
                    </svg>
                </a>
                <a href="#">
                    <svg class="hero-section__icon mr-2 mt-2">
                        <use xlink:href="Images/sprite.svg#icon-instagram">
                        </use>
                    </svg>
                </a>
                <a href="#">
                    <svg class="hero-section__icon mr-2 mt-2">
                        <use xlink:href="Images/sprite.svg#icon-twitter">
                        </use>
                    </svg>
                </a>
        </div>
    </div>
</div>



<div class="services pt-5" id="services-section">
    <div class="row no-row px-5">
        <div class="col-md-5 pr-0 no-col">
            <p class="services__heading d-inline align-top">SERVICES</p>
            <svg class="services__icon mt-4">
                <use xlink:href="Images/sprite.svg#icon-services">
                </use>
            </svg>
        </div>

        <div class="col-md-7 pl-0 py-4 no-col">
            <p class="mt-4 services__text">
                The ability to create success is the product of a unique combination of skills, mindset and abilities
                that you can tap into again and again to achieve your biggest dreams.
            </p>
        </div>
    </div>

    <div class="row no-row px-5 services__card">
        <div class="col-md-3 no-col pl-0">
            <div class="card card-c" style="width: 18rem;">
                <div class="py-3">
                    <img class="card-img-top card-img-top-c mx-auto d-block " src="Images/Services/Group_187.png" alt="Card image cap">
                </div>
                <div class="card-body card-body-c">
                    <h5 class="card-title">Accounting and Advisory Services</h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 no-col pl-0">
            <div class="card card-c" style="width: 18rem;">
                <div class="py-3">
                    <img class="card-img-top card-img-top-c mx-auto d-block " src="Images/Services/Group_188.png" alt="Card image cap">
                </div>
                <div class="card-body  card-body-c">
                    <h5 class="card-title">Legal Compliances</h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 no-col pl-0">
            <div class="card card-c" style="width: 18rem;">
                <div class="py-3">
                    <img class="card-img-top card-img-top-c mx-auto d-block " src="Images/Services/Group_320.png" alt="Card image cap">
                </div>
                <div class="card-body  card-body-c">
                    <h5 class="card-title">payroll</h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 no-col pl-0">
            <div class="card card-c" style="width: 18rem;">
                <div class="py-3">
                    <img class="card-img-top card-img-top-c mx-auto d-block " src="Images/Services/GovernanceandRiskAssurance.png"
                        alt="Card image cap">
                </div>
                <div class="card-body  card-body-c">
                    <h5 class="card-title">Governance and Risk Assurance</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row no-row">
        <div class="col-md-6 no-col text-center py-5">
            <a href=" {{ route('services') }} " class="services__link">
                <b class="services__more">
                    M<b class="services__more-1">OR</b>E
                </b>

                <svg class="services__icons mr-2 mt-2">
                    <use xlink:href="Images/sprite.svg#icon-right-arrow">
                    </use>
                </svg>
            </a>
        </div>
        <div class="col-md-6 no-col">

        </div>
    </div>
</div>



<div class="services pt-5" id="about-section" style=" background-color:#fff; ">
    <div class="row no-row px-5">
        <div class="col-md-5 pr-0 no-col">
            <p class="services__heading d-inline align-top">ABOUT</p>
            <svg class="services__icon mt-4">
                <use xlink:href="Images/sprite.svg#icon-about-us">
                </use>
            </svg>
        </div>

        <div class="col-md-7 pl-0 py-4 no-col">
            <p class="mt-4 services__text">
                Call it synchronicity, kismet, or just being in the right place at the right time. Successful
                entrepreneurs understand this paradigm shift and are doing everything to make the most of it.
            </p>
        </div>
    </div>
    <div class="row no-row about">
        <div class="col-md-4 no-col">
            <img src="Images/Carousel/img1.png" alt="" class="about__img">
        </div>
        <div class="col-md-8">
            <div class="">
               
                <div class="card" style="width: auto ;">
                <!-- <div class="py-3">
                    <img class="card-img-top card-img-top-c mx-auto d-block " src="Images/Services/Group_187.png" alt="Card image cap">
                </div> -->
                <div class="card-body">
                    <h2 class="card-title">CA Gaurav Mishra - Founder – The Man behind XYZ.Com</h2>
                    <p class="card-text"> Gaurav qualified the CA Exams from the Institute of Chartered Accountants of India in 2016.
                    He worked with Big 4 in Risk Advisory Department. He has experience in Risk Based Internal
                    Audit of Manufacturing, Metal and Mining Sector. He has good experience in field of Project</p>
                </div>
            </div>
            </div>
        </div>
    </div>


</div>


@include('layouts.footer')


@endsection