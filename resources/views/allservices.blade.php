@extends('layouts.app')

@section('content')




<div class="row no-row header">
        <div class="col-xs-7 col-md-7 no-col text-center">
            <h1 class="header__h1-text">Service</h1>
        </div>
        <div class="col-xs-5 col-md-5 no-col d-flex align-items-center justify-content-center">
            <img class="header-icon" src="/Images/other/services.svg" class="header__top-icon" alt="">
        </div>
    </div>


<div class="container">
<div class="row no-row py-5 service-card">
    <div class="col-md-3 no-col w-100 h-100">
        <div class="card">
                <img class="service-card__image" src="Images/other/AccountingandAdvisoryServices.svg" alt="Card image cap" style=" height:100%; width:100%; " >
                <h5 class="service-card__title p-1">Legal Compliances</h5>
        </div>
    </div>
    <div class="col-md-3 no-col w-100 h-100">
            <div class="card">
                    <img class="service-card__image" src="Images/other/LegalCompliances.svg" alt="Card image cap" style=" height:100%; width:100%; " >
                    <h5 class="service-card__title p-1">Legal Compliances</h5>
            </div>
        </div>
</div>
</div>
@include('layouts.footer')

@endsection
