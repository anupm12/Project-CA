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


            <h5 class="hero-section__social-text">Know us better</h5><br>
                @foreach($social as $data)
                @if($data -> check)
                <a class="social-icon" href="#">
                    <svg class="hero-section__icon mr-2 mt-2">
                    <use xlink:href="Images/Social/social.svg#{{ $data -> icon }}">
                        </use>
                    </svg>
                </a>
                @endif
                @endforeach
        </div>
    </div>
</div>



<section class="sector pb-5">
    <div class="row no-row px-5">
        <div class="col-md-12 pl-0 py-4 no-col">
            <p class="mt-4">
                <h5 class="text-center pb-4 heading dark-text-color" style="font-weight:500;">Your Business Is Our Domain</h5>
                <h5 class="text-center sub-heading gery-text-color">Our Umbrella Of Services</h5>
            </p>
        </div>
    </div>

    <div class="container">
    <div class="row no-row">
        <div class="col-md-4 no-col pl-0">
            <div class="card sector__sector-card h-100">
                <div class="card-body sector__sector-card-body px-5">

                            <div class="sector-sub-section py-3">
                                <div class="circle mr-3">
                                            {{-- <svg>
                                                    <use xlink:href="Images/Sectors/sectors.svg#icon-communication">
                                                    </use>
                                                </svg> --}}
                                                <img src="Images/Sectors/SVG/hand-shake.svg" alt="">
                                </div>
                                <p class="para gery-color-text" style="font-weight:500; color:#1e90ff !important;">Consultancy</p>
                            </div>


                    <p class="card-text sector__sector-card-text para text-muted pt-2">Auditing advice helps you formulate your strategy for
                        the future business diversifications and better ROI.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 no-col pl-0">
            <div class="card sector__sector-card h-100">
                <div class="card-body sector__sector-card-body px-5">
                    <div class="sector-sub-section py-3">
                            <div class="circle mr-3" style="background:#ffa502;">
                                <img src="Images/Sectors/SVG/settings-work-tool.svg" alt="">
                            </div>
                        <p class="para gery-color-text" style="font-weight:500;color:#ffa502 !important; ">Specialty Services</h5>
                    </div>
                    <p class="card-text sector__sector-card-text para text-muted pt-2" >We understand each family business is unique.
                        Therefore, our solutions too are unique and personalized.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 no-col pl-0">
            <div class="card sector__sector-card h-100">
                <div class="card-body sector__sector-card-body px-5">
                    <div class="sector-sub-section py-3">
                            <div class="circle mr-3" style="background:#ff4757;">
                                <img src="Images/Sectors/SVG/analysis.svg" alt="">
                            </div>
                        <p class="para gery-color-text" style="font-weight:500;color:#ff4757 !important;">Audit & Assurance</h5>
                    </div>
                    <p class="card-text sector__sector-card-text para text-muted pt-2">Auditing needs to give authentic, actionable and
                        insightful statements for the investors to base their investment decisions.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row no-row sector">
        <div class="col-md-4 no-col pl-0">
            <div class="card sector__sector-card h-100">
                <div class="card-body sector__sector-card-body px-5">
                    <div class="sector-sub-section py-3">
                            <span class="circle mr-3" style="background:#2ed573;">
                                <img src="Images/Sectors/SVG/tax.svg" alt="">
                            </span>
                        <p class="para gery-color-text" style="font-weight:500;color:#2ed573 !important;">Tax Planning Services</p>
                    </div>
                    <p class="card-text sector__sector-card-text para pt-2 text-muted">Our specialist’s tax knowledge encompasses both
                        national & global laws of taxation. As a result, you would get expert advice.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 no-col pl-0">
            <div class="card sector__sector-card h-100">
                <div class="card-body sector__sector-card-body px-5">
                        <div class="sector-sub-section py-3">
                            <div class="circle mr-3" style="background:#3742fa;">
                                <img src="Images/Sectors/SVG/progress-report.svg" alt="">
                            </div>
                        <p class="para gery-color-text"  style="font-weight:500;color:#5352ed !important;">Growth Strategies</h5>
                        </div>
                    <p class="card-text sector__sector-card-text pt-2 para text-muted">We provide ideas for both entrepreneurship & venture
                        capitalism as the need of business expansion looks for many avenues of growth.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 no-col pl-0">
            <div class="card sector__sector-card h-100">
                <div class="card-body sector__sector-card-body px-5">
                    <div class="sector-sub-section py-3">
                            <span class="circle mr-3" style="background:#2f3542;">
                                <img src="Images/Sectors/SVG/communication.svg" alt="">
                            </span>
                        <p class="para gery-color-text" style="font-weight:500;color:#2f3542 !important;">Supporting Enterprise</p>
                    </div>
                    <p class="card-text sector__sector-card-text pt-2 para text-muted">The passion behind each business venture inspires us.
                        Naturally, we too are passionate in providing quality ideas and insights that work.</p>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>



<section class="services py-5">

        <div class="custom-center">
            <h3 class="services__heading d-inline align-top dark-color-text">Services</h3>
        </div>

        <div class="custom-center px-8 py-4">
            <p class="mt-4 services__text gery-color-text para">
                The ability to create success is the product of a unique combination of skills, mindset and abilities
                that you can tap into again and again to achieve your biggest dreams.
            </p>
        </div>


    <div class="row no-row px-5 card-row services__card py-4">
        <div class="col-md-3 no-col card-col wow bounceInUp"
            data-sal="slide-up"
            data-sal-delay="300"
            data-sal-easing="ease-out-bounce"
        >
            <div class="card h-100 card1 " style="border-top: 6px solid #1e90ff !important;">
                <div class="card-body py-4">
                    <img class="card-img-top mx-auto d-block " src="Images/Services/Group_187.png" alt="Card image cap">
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center" style="background:hsl(0,0%,97%);">
                    <p class="card-title">Accounting and Advisory Services</p>
                    <a href="" class="btn btn-outline-primary btn-custom-outline btn-sm" >View</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 no-col card-col pl-0 wow  bounceIn">
            <div class="card h-100 card1" style="border-top: 6px solid #ffa502 !important;">
                <div class="card-body py-3">
                    <img class="card-img-top mx-auto d-block " src="Images/Services/Group_188.png" alt="Card image cap">
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <p class="card-title" style="background:hsl(0,0%,97%);">Legal Compliances</p>
                    <a href="" class="btn btn-outline-primary btn-custom-outline btn-sm" >View</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 no-col card-col pl-0 wow bounceInDown">
            <div class="card h-100 card1" style="border-top: 6px solid #ff4757 !important;">
                <div class="card-body py-3">
                    <img class="card-img-top mx-auto d-block " src="Images/Services/Group_320.png" alt="Card image cap">
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center" style="background:hsl(0,0%,97%);">
                    <p class="card-title">payroll</p>
                    <a href="" class="btn btn-outline-primary btn-custom-outline btn-sm" >View</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 no-col card-col pl-0 wow bounceIn">
            <div class="card h-100 card1" style="border-top: 6px solid #2ed573 !important;">
                <div class="card-body py-3">
                    <img class="card-img-top mx-auto d-block " src="Images/Services/GovernanceandRiskAssurance.png" alt="Card image cap">
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center" style="background:hsl(0,0%,97%);">
                    <p class="card-title para">Governance and Risk Assurance</p>
                    <a href="" class="btn btn-outline-primary btn-custom-outline btn-sm" >View</a>
                </div>
            </div>
        </div>

        <a href=" {{ route('allservices')  }}  " class="services__link my-4 mx-4 hvr-icon-forward"" style="font-weight: 600;
        color: #1e90ff;">
                More <i class="ml-1 fas fa-arrow-right hvr-icon"></i>
                {{-- <svg class="services__icons mr-2 mt-2">
                    <use xlink:href="Images/sprite.svg#icon-right-arrow">
                    </use>
                </svg> --}}
            </a>

    </div>



</section>


<section class="about py-5">
    <div class="px-5 custom-center">
            <h3 class="services__heading dark-color-text">About</h3>
    </div>

        <div class="custom-center px-8 py-4 px-sm-3">
            <p class="mt-4 services__text gery-color-text para">
                Call it synchronicity, kismet, or just being in the right place at the right time. Successful
                entrepreneurs understand this paradigm shift and are doing everything to make the most of it.
            </p>
        </div>


    <div class="container">
        <div class="row no-row  px-5 py-4 card-row about__card-1">
            <div class="col-md-4 no-col card-col pl-0 d-flex">
                <div class="card h-100 w-100 card1" style="border-top: 6px solid #3742fa !important;">
                    <div class="about__header py-3">
                        <img class="card-img-top mx-auto d-block about__img" src="Images/Face/man.png" alt="Card image cap">
                    </div>
                    <div class="card-body py-3">
                        <h5 class="card-title main-p">CA Gaurav Mishra</h5>
                        <h5 class="sub-p">Founder</h5>
                        <a href="" class="btn btn-outline-primary btn-sm btn-custom-outline">View</a>
                        <div class="social-link py-3">
                            <a href="" class="mr-2 social-circle social-link__facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="" class="mr-2 social-circle social-link__twitter"><i class="fab fa-twitter"></i></a>
                            <a href="" class="social-circle social-link__instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    </div>
                    {{-- <div class="card-footer">
                            <div class="about__text" style="background:hsl(0,0%,97%);">
                                <p>
                                    <i class="fas fa-quote-left" style="
                                font-size: 22px;
                                color: #5dcaf0;">
                                    </i>&nbsp;&nbsp;
                                    The Man behind civestt.Com
                                    Gaurav qualified the CA Exams
                                    from the Institute of Chartered Accountants of India in 2016.
                                </p>
                            </div>
                            </div> --}}

            </div>

            <div class="col-md-4 no-col card-col pl-0 d-flex">
                <div class="card h-100 w-100 card1" style="border-top: 6px solid #5352ed !important;">
                    <div class="about__header py-3">
                        <img class="card-img-top mx-auto d-block about__img" src="Images/Face/boy.png" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title main-p">Akshay Gupta</h5>
                        <h5 class="sub-p">CEO</h5>
                        <a href="" class="btn btn-outline-primary btn-sm btn-custom-outline">View</a>
                        <div class="social-link py-3">
                            <a href="" class="mr-2 social-circle social-link__facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="" class="mr-2 social-circle social-link__twitter"><i class="fab fa-twitter"></i></a>
                            <a href="" class="social-circle social-link__instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    {{-- <div class="card-footer" style="background:hsl(0,0%,97%);">
                            <div class="about__text">
                                <p>
                                    <i class="fas fa-quote-left" style="
                                    font-size: 22px;
                                    color: #5dcaf0;">
                                    </i>&nbsp;&nbsp;
                                    He is qualified Law graduate and also qualified IAS Mains 2 times.
                                </p>
                            </div>
                            </div> --}}
                </div>
            </div>

            <div class="col-md-4 no-col card-col pl-0 d-flex">
                <div class="card h-100 w-100 card1" style="border-top: 6px solid #1e90ff !important;">
                    <div class="about__header py-3">
                        <img class="card-img-top mx-auto d-block about__img" src="Images/Face/boss.png" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title main-p">Yogesh Singh</h5>
                        <h5 class="sub-p">Head of Content Design</h5>
                        <a href="" class="btn btn-outline-primary btn-sm btn-custom-outline">View</a>
                        <div class="social-link py-3">
                            <a href="" class="mr-2 social-circle social-link__facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="" class="mr-2 social-circle social-link__twitter"><i class="fab fa-twitter"></i></a>
                            <a href="" class="social-circle social-link__instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    {{-- <div class="card-footer" style="background:hsl(0,0%,97%);">
                            <div class="about__text">
                                <p>
                                    <i class="fas fa-quote-left" style="
                                                font-size: 22px;
                                                color: #5dcaf0;">
                                    </i>&nbsp;&nbsp;
                                    He is qualified finance post graduate from Allahabad University.
                                </p>
                            </div>
                            </div> --}}
                </div>
            </div>
        </div>
    </div>


</section>


<section id="bulletin-section" class="news py-5">

        <div class="px-5 custom-center">
            <h3 class="services__heading d-inline cool-link-main align-top dark-text-color">News</h3>
        </div>


            <div class="d-flex justify-content-center">
                <img src="Images/SVG/news1.svg" alt="" style="height: 16rem;">
            </div>


        <div class="d px-8 py-4">
            <p class="services__text justify-content-center align-items-center para gery-text-color">
                Call it synchronicity, kismet, or just being in the right place at the right time. Successful
                entrepreneurs understand this paradigm shift and are doing everything to make the most of it.
            </p>
        </div>



    <div id="bulletin-section" class="container px-5">
        <div class="row no-row ">
            <div class="col-md-3"></div>
            <div class="col-md-6 no-col pl-0 d-flex">
                <ul class="list-group player box-border">
                    <li class="list-group-item">News</li>
                </ul>
                <ul class="list-group players mt-5 box-border">
                    <li class="list-group-item ">
                        <span><i class="fas fa-dot-circle news__new"></i><a href="">
                            Player 1
                        </a></span>
                        <p class="text-muted">20 July</p>
                    </li>
                    <li class="list-group-item"><span><i class="far fa-dot-circle mr-2"></i><a href="">Player 2</a></span>
                        <p class="text-muted">21 July</p></li>
                    <li class="list-group-item"><span><i class="far fa-dot-circle mr-2"></i><a href="">Player 3</a></span><p class="text-muted">25 July</p></li>
                    <li class="list-group-item"><span><i class="far fa-dot-circle mr-2"></i><a href="">Player 4</a></span><p class="text-muted">27 July</p></li>
                </ul>

            </div>
            <div class="col-md-3"></div>

        </div>
        </div>

        <div class="row no-row " style="transform: translate(0%,165%);">
            <div class="col-md-4"></div>
            <div class="col-md-4 no-col mx-sm-3">

                    <p class="text-muted"><i class="fas fa-dot-circle mr-2" style="color:#70a1ff"></i>Subscribe now to stay connected. We respect your privacy.</p>
                    <p class="text-muted"><i class="fas fa-dot-circle mr-2" style="color:#70a1ff"></i> News Letter Subcribtion coming soon.</p>

                <form action="">
                    <div class="form-group text-center ">
                        <input type="email" class="form-control contact__form-control" placeholder="Enter your Email">
                    </div>
                    <div class="custom-center ">
                    <button type="submit" class="btn btn-custom" style="background:#1e90ff; font-weight:500;"><i class="fab fa-telegram-plane mr-2"></i>Subscribe</button>
                    </div>
                </form>
                <a href=""></a>
            </div>
            <div class="col-md-4 py-4"></div>
        </div>

        <div class="row no-row" style="padding-top:4.5rem !important; padding-bottom:4.5rem !important;"></div>


</section>

</div>



</section>




@include('layouts.contact')
@include('layouts.footer')

@endsection

@section('page-script')

<script type="text/javascript" src="{{URL::asset('js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('js/main.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('js/typed.js')}}"></script>
<script type="text/javascript">
    sal();
</script>
@stop
