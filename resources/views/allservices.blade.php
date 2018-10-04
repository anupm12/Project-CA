@extends('layouts.app')

@section('content')




<div class="header" style="display:flex;justify-content: space-around;">
    <div class="text-center">
        <h1 class="header__h1-text">Services</h1>
    </div>
    <div class="align-items-center justify-content-center">
        <img class="header-icon" src="/Images/other/aboutUs.svg" class="header__top-icon" alt="">
    </div>
</div>




<div class=" service-card">
    <div class="row no-row py-5">

        <div class="col-md-3 no-col d-flex justify-content-center service-card__allservices-col">
            <div class="card pb-3 service-card__allservices-card">
                <div class="img-fluid">
                    <img class="service-card__allservices-img" src="Images/other/AccountingandAdvisoryServices.svg" alt="Card image cap">
                </div>
                <div class="d-flex align-items-center text-center">
                    <a href=" {{ route('single')  }}  " class="service-card__title">Legal Compliances</a>
                </div>
            </div>
            </a>
        </div>

        <div class="col-md-3 no-col d-flex justify-content-center">
            <div class="card pb-3  service-card__allservices-card">
                <div class="img-fluid">
                    <img class="service-card__allservices-img" src="Images/other/AccountingandAdvisoryServices.svg" alt="Card image cap">
                </div>
                <div class="d-flex align-items-center text-center">
                    <a href=" {{ route('single')  }}  " class="service-card__title">Legal Compliances</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 no-col d-flex justify-content-center">
            <div class="card pb-3  service-card__allservices-card">
                <div class="img-fluid">
                    <img class="service-card__allservices-img" src="Images/other/AccountingandAdvisoryServices.svg" alt="Card image cap">
                </div>
                <div class="d-flex align-items-center text-center">
                    <a href=" {{ route('single')  }}  " class="service-card__title">Legal Compliances</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 no-col d-flex justify-content-center">
            <div class="card pb-3  service-card__allservices-card">
                <div class="img-fluid">
                    <img class="service-card__allservices-img" src="Images/other/AccountingandAdvisoryServices.svg" alt="Card image cap">
                </div>
                <div class="d-flex align-items-center text-center">
                    <a href=" {{ route('single')  }}  " class="service-card__title">Legal Compliances</a>
                </div>
            </div>
        </div>

    </div>
</div>

@include('layouts.contact')
@include('layouts.footer')



@endsection
