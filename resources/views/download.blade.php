@extends('layouts.app')

@section('content')


@include('layouts.header')

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
