@extends('layouts.app')

@section('content')


<div class="header">
        <div class="row no-row px-4 py-2" style="background:#2b2c28d9">
                <div class="col-md-12 no-col my-4 header-link">
                <a href="">Home</a><span>&nbsp;<i class="fas fa-angle-right"></i></span><a href="">Services</a><span>&nbsp;<i class="fas fa-angle-right"></i></span><a href="">{{ $service -> heading }}</a>
                </div>
                </div>


    <div class="d-flex flex-sm-row flex-column justify-content-center align-items-center" style="padding:4rem;">
        <div>
        <div class="header-design box-border">
            <h4 class="header__h1-text heading">{{ $service -> heading }}</h4>
        </div>
        </div>

    </div>
</div>

<div class="content" style="background:#fff;">
<div class="container" style="padding-top: 4.5rem !important;">
<div class="row no-row service-list">
    <div class="col-md-3 no-col py-4">
        <ul class="list-group box-border">
                <li class="list-group-item" style="border:0 !important;border-top:6px solid #53C7F0 !important;background:hsl(0,0%,97%);">Services</li>
                @foreach($services as $data)
                    <li style="border:0 !important;" class="list-group-item {{ Request::is('single/'.$data -> id) ? 'services-link-active' : '' }}"><a class="services-link text-muted " href="{{ route('single',['id' => $data -> id])  }}">{{ $data -> heading }}</a></li>
                @endforeach
        </ul>
    </div>
    <div class="col-md-9 no-col py-4" style="padding-left: 3rem !important;">
            <div>
                    @if(!$service -> image)
                    <div style="background-image:url('Images/bg.svg')">
                        <svg class="header-logo" style="border:0;">
                                <use xlink:href="{{ asset('Images/Services/services.svg#'.$service -> icon) }}">
                                </use>
                        </svg>
                    </div>
                        @else
                        <img src="{{ $service -> image }}" alt="{{ $service -> heading }}">
                    @endif
                </div>

        {!! $service -> content !!}
    </div>
</div>
</div>
</div>


@include('layouts.contact')
@include('layouts.footer')

@endsection
