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


<div class="row no-row hero-section">
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
            <h3>Experience, <b class="highlight-text" >Knowledge, </b> Dedication is what we emphasize on.</h3>
            <small>Know us better</small>
        </div>
    </div>
    </div>
</div>


@endsection
