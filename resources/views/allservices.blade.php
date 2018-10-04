@extends('layouts.app')

@section('content')




@include('layouts.servicesheader');


<div class=" service-card">
    <div class="row no-row py-5">

        <div class="col-md-3 no-col d-flex justify-content-center service-card__allservices-col">
            <div class="card pb-3  service-card__allservices-card">
                <div class="img-fluid">
                    <img class="service-card__allservices-img" src="Images/other/AccountingandAdvisoryServices.svg" alt="Card image cap">
                </div>
                <div class="d-flex align-items-center text-center">
                    <p class="service-card__title">Legal Compliances</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 no-col d-flex justify-content-center">
            <div class="card pb-3  service-card__allservices-card">
                <div class="img-fluid">
                    <img class="service-card__allservices-img" src="Images/other/AccountingandAdvisoryServices.svg" alt="Card image cap">
                </div>
                <div class="d-flex align-items-center text-center">
                    <p class="service-card__title">Legal Compliances</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 no-col d-flex justify-content-center">
            <div class="card pb-3  service-card__allservices-card">
                <div class="img-fluid">
                    <img class="service-card__allservices-img" src="Images/other/AccountingandAdvisoryServices.svg" alt="Card image cap">
                </div>
                <div class="d-flex align-items-center text-center">
                    <p class="service-card__title">Legal Compliances</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 no-col d-flex justify-content-center">
            <div class="card pb-3  service-card__allservices-card">
                <div class="img-fluid">
                    <img class="service-card__allservices-img" src="Images/other/AccountingandAdvisoryServices.svg" alt="Card image cap">
                </div>
                <div class="d-flex align-items-center text-center">
                    <p class="service-card__title">Legal Compliances</p>
                </div>
            </div>
        </div>

    </div>
</div>

@include('layouts.contact')
@include('layouts.footer')



@endsection
