@extends('layouts.app')

@section('content')


@include('layouts.header')

<div class="about-page p-5">
    <span>
        <img src="Images/profile-image/1.png" class="about-page__profile-image-1" alt="">
    </span>
    <div class="about-page__profile-text-1 text-start">
        <h1 style="font-size:2rem; ">CA Gaurav Mishra - Founder – The Man behind XYZ.Com</h1>
        <p class="px-5">Gaurav qualified the CA Exams from the Institute of Chartered Accountants of India in 2016.
            He worked with Big 4 in Risk Advisory Department. He has experience in Risk Based Internal
            Audit of Manufacturing, Metal and Mining Sector. He has good experience in field of Project
            Report, Accounting of Govt Organisations, Data Analysis etc.
            He was the visiting faculty for CA Foundation and IPCC level from 2014-2016 in renowned
            coaching in Mumbai.
            He was the best paper awardee by Tourism Dept. of Uttar Pradesh Govt.
            Currently he is also writing a books for CA Foundation. He also runs his you tube channel which
            helps CA aspirants at time of exams that how to revise the syllabus within short period of time.
            His focus more on developing digital tools for Internal Audit, MIS reporting and fully automation
            of CA Office for which he is soonly going to launch his project called “Chalte Firte Office reporting”.
        </p>
    </div>
</div>

<div class="about-page p-5">
    <span>
        <img src="Images/profile-image/2.png" class="about-page__profile-image-2" alt="">
    </span>
    <div class="about-page__profile-text-2 text-start">
        <h1 style="font-size:2rem; ">Akshay Gupta – CEO</h1>
        <p class="px-5">He is qualified Law graduate and also qualified IAS
            Mains 2 times. Currently he is practicing at Allahabad
            High Court in civil laws and service matters.
            He has excellent liaisoning skill.
        </p>
    </div>
</div>


<div class="about-page p-5">
    <span>
        <img src="Images/profile-image/3.png" class="about-page__profile-image-3" alt="">
    </span>
    <div class="about-page__profile-text-3 text-start">
        <h1 style="font-size:2rem; ">Yogesh Singh – Head of Content Design</h1>
        <p class="px-5">He is qualified finance post graduate from
            Allahabad University. He has hands on experience in
            Accounting and Bank Audit as well project finance.
            Previously he was associated with Sonata Finance as
            Regional Finance Head – Kanpur.
            Currently he is responsible for content designing for us.
        </p>
    </div>
</div>

@include('layouts.footer')
@endsection
