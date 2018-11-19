@extends('layouts.app')

@section('content')


<div class="header" style="display:flex;justify-content: space-around;">
    <div class="text-center">
        <h1 class="header__h1-text">Download</h1>
    </div>
    <div class="align-items-center justify-content-center">
        <img class="header__top-icon header-icon img-fluid" src="{{ asset('/Images/other/download.svg') }}" alt="">
    </div>
</div>

<div class="custom-center py-4" style="background-color: #f8f8f8!important;">
    <form method="GET" action="/results">
        <div class="input-group ">
            <input type="text" name="search" class="form-control border-right-0 border"
                style="border-bottom-left-radius: 1.25rem;
                border-top-left-radius: 1.25rem;"
                placeholder="Search..."
            >
            <span class="input-group-append">
            <button type="submit" class="border-left-0 border btn-search" style="border-top-right-radius: 1.25rem;
            border-bottom-right-radius: 1.25rem;background:#fff !important;">
            <i class="fas fa-search" style="color: #1e90ff;"></i></button>
            </span>
        </div>

    </form>
</div>

<div class="row no-row p-5 service-card">



    @foreach ($download as $data)
    @if( $data -> publish == 1 )
    <div class="col-md-3 no-col mt-3">
        <div class="card h-100 mr-4 card1">
                <div class="card-header">
                    <h4>{{ $data->heading }}</h4>
                </div>
                <div class="card-body">
                <div class="mx-auto">
                        <svg class=" mr-2 mt-2">
                                <use xlink:href="{{ asset('Images/download/download.svg#'.$data -> icon) }}">
                                </use>
                        </svg>

                <p class="text-muted p-1">{{ $data -> content }}</p>
                </div>
            </div>
            <div class="card-footer">
                <div style="
                display: flex;
                justify-content: space-between;">
                @if(Auth::user())
                    <a href="{{ $data -> path }}" class="btn btn-custom {{ $data -> type }}" ><i class="fas fa-file-download mr-1"></i>Download</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-custom {{ $data -> type }}" ><i class="fas fa-file-download mr-1"></i>Download</a>
                @endif
                <p class="text-muted">{{ $data-> created_at -> format('d/m/Y') }}</p>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>

@include('layouts.contact')
@include('layouts.footer')

@endsection
