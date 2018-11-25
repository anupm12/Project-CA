@extends('layouts.app')

@section('content')


<div id="content-wrapper">
        <div class="container-fluid">

<ol class="breadcrumb admin-header custom-center" style="background: #f4f6fb;">
        <li class="breadcrumb-item">
            <h3><a href="{{route('admin.contact') }}" class="all-header"> Services </a></h3>
        </li>

    </ol>




<div class=" service-card ">
    <div class="custom-center py-3">
                <img src="Images\SVG\services2.svg" style="height: 18rem;">
    </div>



    <div class="custom-center pb-3 ">
            <p class="para light-gery-color-text mx-2-2 mx-xs-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium ea at fugiat eligendi, eveniet consequatur?</p>
    </div>





    <div class="row no-row py-5" style="align-items:center;justify-content:center;">

        @foreach($services as $service)
        <div class="col-md-3 mx-2 no-col service-card__allservices-col">

                    <div style="display:flex; jusitfy-content:space-between;align-items:center;">
                    <div class="service-circle hvr-grow">
                        @if(!$service -> image)

                            <svg class=" mr-2 mt-2 circle-all about__header box-border">
                                    <use xlink:href="Images/Services/services.svg#{{ $service -> icon }}">
                                    </use>
                            </svg>
                        @else
                            <img src="{{ $service -> image }}" alt="{{ $service -> heading }}">
                        @endif
                        <a href="{{ route('single',['id' => $service -> id])  }}" class="service-card__title service-link">
                                <span class="gery-color-text" style="font-weight: 500; font-size:14px;
                                ">{{ $service -> heading }}</span></a>
                    </div>




        </div>
            </div>
            @endforeach

</div>
</div>

        </div>
</div>

@include('layouts.contact')
@include('layouts.footer')



@endsection
