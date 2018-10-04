@extends('layouts.app')

@section('content')


@include('layouts.header')


<section class="main-about">
    <div class="container">
        <div class="row no-row py-4">
            <div class="col-md-6 no-col order-2">
                <h2>Welcome To Monitor Consulting.</h2>
                <p>Strategic planning is a means of administering the formulation
                    and implementation of strategy. Strategic planning is analytical
                    in nature and refers to formalized procedures to produce the data and analyses
                    used as inputs for strategic thinking, which synthesizes the data resulting in the strategy.
                    Strategic planning may also refer to control mechanisms used to implement the strategy once it is
                    determined.
                    In other words, strategic planning happens around the strategy formation process
                </p>

            </div>

            <div class="col-md-6 no-col text-center order-1 order-sm-12">
                <img src="Images/other/consulting.svg" alt="" class="about-section-icon">
            </div>
        </div>

        <div class="row no-row py-4">
            <div class="col-md-6 no-col text-center">
                <img class="about-section-icon" src="Images/other/mountain.svg" alt="" class="about-section-icon">
            </div>
            <div class="col-md-6 no-col ">
                <h2>Our Mission</h2>
                <p>Strategic planning is a means of administering the formulation
                    and implementation of strategy. Strategic planning is analytical
                    in nature and refers to formalized procedures to produce the data and analyses
                    used as inputs for strategic thinking, which synthesizes the data resulting in the strategy.
                    Strategic planning may also refer to control mechanisms used to implement the strategy once it is
                    determined.
                    In other words, strategic planning happens around the strategy formation process
                </p>

            </div>
        </div>

        <div class="row no-row py-4">
            <div class="col-md-6 no-col order-2">
                <h2>Our Vision</h2>
                <p>Strategic planning is a means of administering the formulation
                    and implementation of strategy. Strategic planning is analytical
                    in nature and refers to formalized procedures to produce the data and analyses
                    used as inputs for strategic thinking, which synthesizes the data resulting in the strategy.
                    Strategic planning may also refer to control mechanisms used to implement the strategy once it is
                    determined.
                    In other words, strategic planning happens around the strategy formation process
                </p>

            </div>

            <div class="col-md-6 no-col text-center order-1 order-sm-12">
                <img src="Images/other/glasses.svg" class="about-section-icon" alt="">
            </div>
        </div>
    </div>

    {{-- <div class=" py-4">
        <div class="row no-row quote px-4">
            <div class="col-md-6 no-col">

                    <h2>GET CONSULTATION FROM INDUSTRY EXPERTS.</h2>
                    <p class="lead">Strategic Planning May Also Refer To Control
                        Mechanisms Used To Implement
                        The Strategy Once It Is Determined</p>

            </div>
            <div class="col-md-6 no-col">
                <img src="Images/other/effort.svg" alt="">
            </div>
        </div>
    </div> --}}

    <div class="container py-4">
        <div class="row no-row">
            <div class="col-md-12 no-col py-4">
                <h2>Our Expert Team</h2>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12 no-col">
                <div class="card h-100  ">
                    <div class="py-3">
                        <img class="card-img-about mx-auto d-block " src="Images/face/man.png" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">CA Gaurav Mishra - Founder</h4>
                        <p class="text-muted">The Man behind civestt.Com</p>
                        <p>
                            <i class="fas fa-quote-left about-quote">
                            </i>
                            Gaurav qualified the CA Exams from the Institute of Chartered Accountants of India in 2016.
                            He worked with Big 4 in Risk Advisory Department. He has experience in Risk Based Internal
                            Audit of Manufacturing, Metal and Mining Sector. He has good experience in field of Project
                            Report, Accounting of Govt Organisations, Data Analysis etc.
                            He was the visiting faculty for CA Foundation and IPCC level from 2014-2016 in renowned
                            coaching in Mumbai.
                            He was the best paper awardee by Tourism Dept. of Uttar Pradesh Govt.
                            Currently he is also writing a books for CA Foundation. He also runs his you tube channel
                            which helps CA aspirants at time of exams that how to revise the syllabus within short
                            period of time.
                            His focus more on developing digital tools for Internal Audit, MIS reporting and fully
                            automation of CA Office for which he is soonly going to launch his project called “Chalte
                            Firte Office reporting”.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="row">
            <div class="col-md-12 no-col">
                <div class="card h-100  ">
                    <div class="py-3">
                        <img class="card-img-about mx-auto d-block " src="Images/face/boy.png" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Akshay Gupta – CEO </h4>
                        <p>
                            <i class="fas fa-quote-left about-quote">
                            </i>
                            He is qualified finance post graduate from Allahabad University. He has hands on experience
                            in Accounting and Bank Audit as well project finance. Previously he was associated with
                            Sonata Finance as Regional Finance Head – Kanpur.
                            Currently he is responsible for content designing for us.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="row">
            <div class="col-md-12 no-col">
                <div class="card h-100  ">
                    <div class="py-3">
                        <img class="card-img-about mx-auto d-block " src="Images/face/boss.png" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Yogesh Singh – Head of Content Design </h4>
                        <p>
                            <i class="fas fa-quote-left about-quote">
                            </i>
                            He is qualified finance post graduate from Allahabad University.
                            He has hands on experience in Accounting and Bank Audit as well project finance. Previously
                            he was associated with Sonata Finance as Regional Finance Head – Kanpur.
                            Currently he is responsible for content designing for us.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>


@include('layouts.contact')
@include('layouts.footer')

@endsection
