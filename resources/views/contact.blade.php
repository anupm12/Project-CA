@extends('layouts.app')

@section('content')

<ol class="breadcrumb admin-header custom-center" style="background: #f4f6fb;">
        <li class="breadcrumb-item">
            <h3><a href="{{route('admin.contact') }}" class="all-header"> Contact </a></h3>
        </li>

    </ol>





<section class="contact py-5">
    <div class="row no-row px-5">
        <div class="col-md-6 no-col">

            <div class="row no-row py-5">
                <div class="col-md-12 no-col">
                    <p class="text-left contact__contact-text">We would be delighted to answer any inquiry you might
                        have about your financial affairs, just use the form or choose one of the alternative
                        methods of communication. </p>
                    <a href="#">
                        <svg class="hero-section__icon mr-2 mt-2">
                            <use xlink:href="Images/sprite.svg#icon-facebook">
                            </use>
                        </svg>
                    </a>
                    <a href="#">
                        <svg class="hero-section__icon mr-2 mt-2">
                            <use xlink:href="Images/sprite.svg#icon-instagram">
                            </use>
                        </svg>
                    </a>
                    <a href="#">
                        <svg class="hero-section__icon mr-2 mt-2">
                            <use xlink:href="Images/sprite.svg#icon-twitter">
                            </use>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="row no-row">
                <div class="col-md-12 no-col">
                    <div class="card contact__contact-card">
                        <div class="card-body px-5 text-left contact__contact-text">
                            <p style="color:#53C7F0;" class="mb-3"> <b>ADDRESS:</b></p>
                            <p class="card-text pb-4">
                                Office 305, Street 15, Manhattan, <br>New York<br>support@gmail.com
                            </p>
                            <p style="color:#53C7F0;" class="mb-3"> <b>CONTACT INFO: </b></p>
                            <p class="card-text mb-2">
                                +48 122 33 44 555<br>+12 555 44 33 123
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="col-md-6 pl-0 py-4 no-col">
            <h3>Throw a Query!</h3>
            <form action="" class="contact__form">
                <div class="input-group contact__form__input-group">
                    <input class="form-control contact__form__input-group__form-control " type="text" name="name"
                        placeholder="Your Name" />
                    <input class="form-control contact__form__input-group__form-control" type="text" name="phone"
                        placeholder="Your Contact Number" />
                </div>
                <div class="form-group">
                    <input type="email" class="form-control contact__form-control" name="email" placeholder="Your Email" />
                </div>
                <div class="form-group">
                    <textarea class="form-control contact__form-control" name="content" id="" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-custom btn-primary">Send Us</button>
            </form>
        </div>
    </div>
</section>


<!-- <div id="map"></div>






<script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script> -->



<div class="map"  >
<div class="map__mapouter">
    <div class="map__gmap_canvas">
        <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=hospet&t=&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
        <a href="https://www.pureblack.de/google-maps/"></a>
    </div>
    </div>
</div>


@include('layouts.footer')

@endsection
