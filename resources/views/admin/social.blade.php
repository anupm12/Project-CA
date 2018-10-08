@extends('layouts.adminapp')

@section('content')
@include('sweet::alert')


<section class="admin-header py-4">
    <div class="container">
        <div class="row no-row px-3">
            <div class="col-md-12 no-col ">
                <h2><i class="fas fa-cogs"></i>Services<span class="add">+</span></h2>

            </div>
        </div>
    </div>
</section>

<div class="menu py-4">
    <div class="container admin">
        <div class="row no-row justify-content-center">
            <div class="col-md-3 no-col">
                @include('layouts.sidenav')
            </div>
            <div class="col-md-9 no-col">
                <div class="card">
                    <div class="card-header admin__card-header">
                        Social Links
                        <div class="social__help">
                            <p>Go To Setting to off this glowing effect</p>
                            <a class="help-animation" href="#" data-toggle="modal" data-target="#helpModal"><i class="fas fa-info-circle"></i>Help</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.social.save') }}" method="POST">
                            {{ method_field('patch') }}
                            {{ csrf_field() }}
                            <div class="social-links">
                                <div class="social-links__individual">
                                    <a href="" data-toggle="modal" data-target="#facebookModal"><svg class="social-links__individual__icon mt-4">
                                            <use xlink:href="{{ asset('Images/Social/sprite.svg#icon-facebook') }}">
                                            </use>
                                        </svg>

                                        <p>Facebook</p>
                                    </a>

                                    <label class="switch switch-c">
                                        <input name="facebook" value="1" type="checkbox"
                                            {{ $social->find(1)->link?'':'disabled' }}
                                            {{ $social->find(1)->check?'checked':'unchecked' }}>
                                        <span class="slider {{ $social->find(1)->link?'':'disable' }} slider-c round round-c"></span>
                                    </label>


                                </div>

                                <div class="social-links__individual">
                                    <a href="" data-toggle="modal" data-target="#instagramModal">
                                        <svg class="social-links__individual__icon mt-4">
                                            <use xlink:href="{{ asset('Images/Social/sprite.svg#icon-instagram') }}">
                                            </use>
                                        </svg>

                                        <p>Instagram</p>
                                    </a>
                                    <label class="switch switch-c">
                                        <input name="instagram" value="1" type="checkbox"
                                            {{ $social->find(2)->link?'':'disabled' }}
                                            {{ $social->find(2)->check?'checked':'unchecked' }}>
                                        <span class="slider {{ $social->find(2)->link?'':'disable' }} slider-c round round-c"></span>
                                    </label>

                                </div>

                                <div class="social-links__individual">
                                    <a href="" data-toggle="modal" data-target="#google-plusModal">
                                        <svg class="social-links__individual__icon mt-4">
                                            <use xlink:href="{{ asset('Images/Social/sprite.svg#icon-google-plus') }}">
                                            </use>
                                        </svg>

                                        <p>Google Plus</p>
                                    </a>

                                    <label class="switch switch-c">
                                        <input name="googleplus" value="1" type="checkbox"
                                            {{ $social->find(3)->link?'':'disabled' }}
                                            {{ $social->find(3)->check?'checked':'unchecked' }}>
                                        <span class="slider {{ $social->find(3)->link?'':'disable' }} slider-c round round-c"></span>
                                    </label>

                                </div>

                                <div class="social-links__individual">
                                    <a href="" data-toggle="modal" data-target="#twitterModal">
                                        <svg class="social-links__individual__icon mt-4">
                                            <use xlink:href="{{ asset('Images/Social/sprite.svg#icon-twitter') }}">
                                            </use>
                                        </svg>

                                        <p>Twitter</p>
                                    </a>
                                    <label class="switch switch-c">
                                        <input name="twitter" value="1" type="checkbox"
                                            {{ $social->find(4)->link?'':'disabled' }}
                                            {{ $social->find(4)->check?'checked':'unchecked' }}>
                                        <span class="slider {{ $social->find(4)->link?'':'disable' }} slider-c round round-c"></span>
                                    </label>

                                </div>



                                <div class="social-links__individual">
                                    <a href="" data-toggle="modal" data-target="#linkedinModal">
                                        <svg class="social-links__individual__icon mt-4">
                                            <use xlink:href="{{ asset('Images/Social/sprite.svg#icon-linkedin') }}">
                                            </use>
                                        </svg>
                                        <p>Linkedin</p>
                                    </a>
                                    <label class="switch switch-c">
                                        <input name="linkedin" value="1" type="checkbox"
                                            {{ $social->find(5)->link?'':'disabled' }}
                                            {{ $social->find(5)->check?'checked':'unchecked' }}>
                                        <span class="slider {{ $social->find(5)->link?'':'disable' }} slider-c round round-c"></span>
                                    </label>

                                </div>


                                <div class="social-links__individual">
                                    <a href="" data-toggle="modal" data-target="#youtubeModal">
                                        <svg class="social-links__individual__icon mt-4">
                                            <use xlink:href="{{ asset('Images/Social/sprite.svg#icon-youtube') }}">
                                            </use>
                                        </svg>

                                        <p>Youtube</p>
                                    </a>
                                    <label class="switch switch-c">
                                        <input name="youtube" value="1" type="checkbox"
                                            {{ $social->find(6)->link?'':'disabled' }}
                                            {{ $social->find(6)->check?'checked':'unchecked' }}>
                                        <span class="slider {{ $social->find(6)->link?'':'disable' }} slider-c round round-c"></span>
                                    </label>

                                </div>


                                <div class="social-links__individual">
                                    <a href="" data-toggle="modal" data-target="#whatsappModal">
                                        <svg class="social-links__individual__icon mt-4">
                                            <use xlink:href="{{ asset('Images/Social/sprite.svg#icon-whatsapp') }}">
                                            </use>
                                        </svg>

                                        <p>Whatsapp</p>
                                    </a>
                                    <label class="switch switch-c">
                                        <input name="whatsapp" value="1" type="checkbox"
                                            {{ $social->find(7)->link?'':'disabled' }}
                                            {{ $social->find(7)->check?'checked':'unchecked' }}>
                                        <span class="slider {{ $social->find(7)->link?'':'disable' }} slider-c round round-c"></span>
                                    </label>

                                </div>
                            </div>

                            <div class="submit_button">
                                <button type="submit" class="btn btn-primary btn-custom">Sumbit</button>
                            </div>
                        </form>
                    </div>





                </div>
            </div>
        </div>



        {{-- Help Modal --}}
        <div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add And Edit Social Links</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Step 1:</strong>&Tab;Click the social icons</li>
                            <li class="list-group -item"><img src="{{ asset('Images/Help/SocialLinks/1.png') }}" alt=""></li>
                            <li class="list-group-item"><strong>Step 2:</strong>&Tab;Enter the URL address or (Phone
                                Number for Whatsapp)</li>
                            <li class="list-group -item"><img src="{{ asset('Images/Help/SocialLinks/2.png') }}" alt=""></li>
                            <li class="list-group-item"><strong>Step 3:</strong>&Tab;For publish tick the checkbox</li>
                            <li class="list-group -item"><img src="{{ asset('Images/Help/SocialLinks/3.png') }}" alt=""></li>
                            <li class="list-group-item"><strong>Step 4:</strong>&Tab;Click Submit Button</li>
                            <li class="list-group -item"><img src="{{ asset('Images/Help/SocialLinks/4.png') }}" alt=""></li>
                        </ul>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Social Modal --}}
        @include('includes.socialmodal')

        @endsection
