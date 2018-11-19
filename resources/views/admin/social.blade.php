@extends('layouts.adminapp')

@section('content')
@include('sweet::alert')

<div id="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb admin-header">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.social') }}"><i class="fab fa-twitter pr-2"></i>SocialMedia Links </a>
                </li>
                <li class="breadcrumb-item active">Overview</li>
            </ol>

            <div class="card box-border" style="border:initial;">
                    <div class="card-header admin__card-header">
                        Social Links

                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.social.save') }}" method="POST">
                            {{ method_field('patch') }}
                            {{ csrf_field() }}
                            <div class="social-links">
                                <div class="social-links__individual">
                                    <a href="" data-toggle="modal" data-target="#facebookModal"><svg class="social-links__individual__icon mt-4">
                                            <use xlink:href="{{ asset('Images/Social/social.svg#icon-facebook') }}">
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
                                            <use xlink:href="{{ asset('Images/Social/social.svg#icon-instagram') }}">
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
                                            <use xlink:href="{{ asset('Images/Social/social.svg#icon-google-plus') }}">
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
                                            <use xlink:href="{{ asset('Images/Social/social.svg#icon-twitter') }}">
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
                                            <use xlink:href="{{ asset('Images/Social/social.svg#icon-linkedin') }}">
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
                                            <use xlink:href="{{ asset('Images/Social/social.svg#icon-youtube') }}">
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
                                            <use xlink:href="{{ asset('Images/Social/social.svg#icon-whatsapp') }}">
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
                                <button type="submit" class="btn btn-custom btn-admin"><i class="fas fa-check-circle pr-2"></i>Sumbit</button>
                            </div>
                        </form>
                    </div>





                </div>
        </div>
</div>


        {{-- Social Modal --}}
        @include('includes.socialmodal')

        @endsection
