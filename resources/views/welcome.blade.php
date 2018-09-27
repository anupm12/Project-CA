
@extends('layouts.app')

@section('content')

<!-- <sec class="flex-center position-ref full-height">
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
                    <img class="d-block w-100" src="Images/Carousel/img1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Images/Carousel/img1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Images/Carousel/img1.jpg" alt="Third slide">
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
                <div id="typed-strings">
                        <h3>Experience, <b class="highlight-text">Knowledge, </b> Dedication is what we emphasize on.</h3>
                    </div>
                    <h3 class="typing" id="typed"></h3>


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



<section class="services py-5">
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
        <div class="col-md-3 no-col pl-0 wow bounceInUp ">
            <div class="card card1" style="width: 18rem;">
                <div class="py-3">
                    <img class="card-img-top mx-auto d-block " src="Images/Services/Group_187.png" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Accounting and Advisory Services</h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 no-col pl-0 wow  bounceIn">
            <div class="card card1" style="width: 18rem;">
                <div class="py-3">
                    <img class="card-img-top mx-auto d-block " src="Images/Services/Group_188.png" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Legal Compliances</h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 no-col pl-0 wow bounceInDown">
            <div class="card card1" style="width: 18rem;">
                <div class="py-3">
                    <img class="card-img-top mx-auto d-block " src="Images/Services/Group_320.png" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5 class="card-title">payroll</h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 no-col pl-0 wow bounceIn">
            <div class="card card1" style="width: 18rem;">
                <div class="py-3">
                    <img class="card-img-top mx-auto d-block " src="Images/Services/GovernanceandRiskAssurance.png" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Governance and Risk Assurance</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row no-row">
        <div class="col-md-6 no-col text-center py-5">
            <a href="#" class="services__link">
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
</section>


<section class="about py-2">
    <div class="row no-row px-5">
        <div class="col-md-5 pr-0 no-col">
            <p class="services__heading d-inline align-top cool-link-main">ABOUT</p>
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

    <div class="container">
    <div class="row no-row px-5 py-5 about__card-1">
        <div class="col-md-4 no-col pl-0 d-flex">
        <div class="about__individual">
            <span class="about__individual__icon">
            <img src="Images/Face/man.png" alt="">
            </span>
            <span class="about__individual__quotation">
                    <svg class="about__icon mr-2 mt-2">
                            <use xlink:href="Images/sprite.svg#icon-quotation">
                            </use>
                        </svg>
            </span>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Gaurav Mishra</h5>
                    <p><strong>Founder</strong></p>
                    <p>
                            Gaurav qualified the CA Exams from the Institute of Chartered Accountants of India in 2016. He worked with Big 4 in Risk Advisory Department.
                            He has experience in Risk Based Internal Audit of Manufacturing, Metal and Mining Sector.
                    </p>
                </div>
            </div>
        </div>

     </div>

     <div class="col-md-4 no-col pl-0 d-flex">
            <div class="about__individual">
                <span class="about__individual__icon">
                <img src="Images/Face/boy.png" alt="">
                </span>
                <span class="about__individual__quotation">
                        <svg class="about__icon mr-2 mt-2">
                                <use xlink:href="Images/sprite.svg#icon-quotation">
                                </use>
                            </svg>
                </span>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Akshay Gupta</h5>
                        <p><strong>CEO</strong></p>
                        <p>
                                He is qualified Law graduate and also qualified IAS Mains 2 times.
                                Currently he is practicing at Allahabad High Court in civil laws and service matters. He has excellent liaisoning skill.
                        </p>
                    </div>
                </div>
            </div>

         </div>

         <div class="col-md-4 no-col pl-0 d-flex">
                <div class="about__individual">
                    <span class="about__individual__icon">
                    <img src="Images/Face/boss.png" alt="">
                    </span>
                    <span class="about__individual__quotation">
                            <svg class="about__icon mr-2 mt-2">
                                    <use xlink:href="Images/sprite.svg#icon-quotation">
                                    </use>
                                </svg>
                    </span>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Yogesh Singh</h5>
                            <p><strong>Head of Content Design</strong></p>
                            <p>
                                He is qualified finance post graduate from Allahabad University.
                                He has hands on experience in Accounting and Bank Audit as well project finance.
                            </p>
                        </div>
                    </div>
                </div>

             </div>
            </div>


    </div>
</section>


<section class="news py-2">
    <div class="row no-row px-5">
        <div class="col-md-5 pr-0 no-col">
            <p class="services__heading d-inline cool-link-main align-top">News</p>
            <svg class="services__icon mt-4">
                <use xlink:href="Images/sprite.svg#icon-newspaper">
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

    <div class="container px-5">
    <div class="row no-row ">
        <div class="col-md-6  align-self-end no-col pl-0 d-flex">
                <div class="news__sub-heading wow bounceInLeft"><h4>News</h4></div>
                <ul class="list-group players mt-5">
                    <li class="list-group-item news_new"><a href="">
                        <span class="news__new__item">New</span>
                        Player 1
                    </a>
                    </li>
                    <li class="list-group-item"><a href="">Player 2</a></li>
                    <li class="list-group-item"><a href="">Player 3</a></li>
                    <li class="list-group-item"><a href="">Player 4</a></li>
                </ul>

        </div>
        {{-- <div class="col-md-6">
            <div class="news__sub-heading1 wow bounceInRight"><h4 class="float-right">News Letter</h4></div>
            <form action="form-inline">
            <div class="form-group" >
                <input type="email" name="email" class="form-control news__form-control" placeholder="Your Email">
            </div>
            <button type="submit" class="btn btn-custom btn-primary mb-2">Subscribe</button>
            </form>
        </div> --}}
    </section>

    </div>



</section>

<section class="contact py-5">
        <div class="row no-row px-5">
            <div class="col-md-4 pr-0 no-col">
                <p class="services__heading d-inline align-top">Contact</p>
                <svg class="services__icon mt-4">
                    <use xlink:href="Images/sprite.svg#icon-contact">
                    </use>
                </svg>
                <p class="services__text">
                    Lorem ipsum dolor, sit amet
                    consectetur adipisicing elit.
                    Voluptates, repudiandae? Ipsum
                    esse quo ad. Architecto
                    magni porro excepturi at
                    maiores facere!
                </p>
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

            <div class="col-md-8 pl-0 py-4 no-col">
                <h3>Leave a Query!</h3>
                <form action="" class="contact__form">
                    <div class="input-group contact__form__input-group">
                        <input class="form-control contact__form__input-group__form-control " type="text" name="name" placeholder="Your Name" />
                        <input class="form-control contact__form__input-group__form-control" type="text" name="phone" placeholder="Your Contact Number" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control contact__form-control" name="email" placeholder="Your Email"/>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control contact__form-control" name="content" id="" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-custom btn-primary">Send Us</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="text-center">
            <h4 >Made with<span> </span>by VA</h4>
        </div>
    </footer>

@include('layouts.footer')

    @endsection

@section('page-script')
<script type="text/javascript" src="{{URL::asset('js/wow.min.js') }}"></script>
{{-- <script type="text/javascript" src="{{URL::asset('js/typed.js')}}"></script> --}}
@stop
