@extends('layouts.app')

@section('content')


<div class="header" style="display:flex;justify-content: space-around;">
    <div class="text-center">
        <h1 class="header__h1-text">Download</h1>
    </div>
    <div class="align-items-center justify-content-center">
        <img class="header__top-icon header-icon img-fluid" src="/Images/other/download.svg" alt="">
    </div>
</div>



<div class="row no-row p-5 service-card">
    <?php $n = 10; ?>
    @for ($i = 0; $i <= $n; $i++)
    <div class="col-md-3 no-col mt-3">
        <div class="card h-100 mr-4 card1">
                <div class="card-header">
                    <h4>Heading</h4>
                </div>
                <div class="card-body">
                <div class="mx-auto">

                <img class="service-card__image" src="Images/other/pdf3.svg" alt="Card image cap" style=" height:5rem; width:5rem; " >
                <h5 class=" p-1">Download</h5>
                </div>
            </div>
            <div class="card-footer">
                <div style="
                display: flex;
                justify-content: space-between;">
                <a href="#" class="btn btn-danger btn-custom" ><i class="fas fa-file-download mr-1"></i>Download</a>
                <p class="text-muted">07/05/2018</p>
                </div>
            </div>
        </div>
    </div>
    @endfor
</div>

@include('layouts.contact')
@include('layouts.footer')

@endsection
