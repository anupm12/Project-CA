@extends('layouts.app')

@section('content')


<div class="header" style="display:flex;justify-content: space-around;">
    <div class="text-center">
        <h1 class="header__h1-text">What's New</h1>
    </div>
    <div class="align-items-center justify-content-center">
        <img class="header-icon" src="/Images/other/aboutUs.svg" class="header__top-icon" alt="">
    </div>
</div>



<div class="row no-row p-5 service-card">
    <div class="col-md-12 no-col">
        <div class="card" style="width: 18rem; height: 14rem;">
                <img class="card-img-top service-card__image" src="Images/Services/Group_187.png" alt="Card image cap" style=" height:100%; width:100%; " >
                <h5 class="service-card__title p-1">Download</h5>
        </div>
    </div>
</div>

@include('layouts.contact')
@include('layouts.footer')

@endsection
