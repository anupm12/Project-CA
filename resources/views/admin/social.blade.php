@extends('layouts.adminapp')

@section('content')


<section class="header py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><i class="fas fa-cogs"></i>Services<span class="add">+</span></h2>

            </div>
        </div>
    </div>
</section>

<div class="menu py-4">
    <div class="container admin">
        <div class="row justify-content-center">
            <div class="col-md-3">
                @include('layouts.sidenav')
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header admin__card-header">
                        Social Links
                        <div class="social__help">
                            <p>Go To Setting to off this glowing effect</p>
                           <a class="help-animation" href="#"data-toggle="modal" data-target="#helpModal"><i class="fas fa-question-circle"></i>Help</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="social-links">
                            <div class="social-links__individual">
                                <a href="" data-toggle="modal" data-target="#facebookModal"><svg class="social-links__individual__icon mt-4">
                                    <use xlink:href="{{ asset('Images/Social/sprite.svg#icon-facebook') }}">
                                    </use>
                                </svg>

                                <p>Facebook</p>
                            </a>
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="defaultIndeterminate1" unchecked>
                                        <label class="custom-control-label" for="defaultIndeterminate1"></label>
                                      </div>
                            </div>

                            <div class="social-links__individual">
                                <a href="" data-toggle="modal" data-target="#instagramModal">
                                <svg class="social-links__individual__icon mt-4">
                                    <use xlink:href="{{ asset('Images/Social/sprite.svg#icon-instagram') }}">
                                    </use>
                                </svg>

                                <p>Instagram</p>
                            </a>
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="defaultIndeterminate2" unchecked>
                                        <label class="custom-control-label" for="defaultIndeterminate2"></label>
                                      </div>
                            </div>

                            <div class="social-links__individual">
                                <a href="" data-toggle="modal" data-target="#google-plusModal">
                                <svg class="social-links__individual__icon mt-4">
                                    <use xlink:href="{{ asset('Images/Social/sprite.svg#icon-google-plus') }}">
                                    </use>
                                </svg>

                                <p>Google Plus</p>
                            </a>
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="defaultIndeterminate3" unchecked>
                                        <label class="custom-control-label" for="defaultIndeterminate3"></label>
                                      </div>
                            </div>

                            <div class="social-links__individual">
                                    <a href="" data-toggle="modal" data-target="#twitterModal">
                                    <svg class="social-links__individual__icon mt-4">
                                        <use xlink:href="{{ asset('Images/Social/sprite.svg#icon-twitter') }}">
                                        </use>
                                    </svg>

                                    <p>Twitter</p>
                                </a>
                                    <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultIndeterminate4" unchecked>
                                            <label class="custom-control-label" for="defaultIndeterminate4"></label>
                                          </div>
                                    </div>



                             <div class="social-links__individual">
                                    <a href="" data-toggle="modal" data-target="#linkedinModal">
                                    <svg class="social-links__individual__icon mt-4">
                                        <use xlink:href="{{ asset('Images/Social/sprite.svg#icon-linkedin') }}">
                                        </use>
                                    </svg>
                                    <p>Linkedin</p>
                                    </a>
                                    <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultIndeterminate5" unchecked>
                                            <label class="custom-control-label" for="defaultIndeterminate5"></label>
                                          </div>
                                    </div>


                             <div class="social-links__individual">
                                    <a href="" data-toggle="modal" data-target="#youtubeModal">
                                    <svg class="social-links__individual__icon mt-4">
                                        <use xlink:href="{{ asset('Images/Social/sprite.svg#icon-youtube') }}">
                                        </use>
                                    </svg>

                                    <p>Youtube</p>
                                    </a>
                                    <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultIndeterminate6" unchecked>
                                            <label class="custom-control-label" for="defaultIndeterminate6"></label>
                                          </div>
                                    </div>


                             <div class="social-links__individual">
                                    <a href="" data-toggle="modal" data-target="#whatsappModal">
                                    <svg class="social-links__individual__icon mt-4">
                                        <use xlink:href="{{ asset('Images/Social/sprite.svg#icon-whatsapp') }}">
                                        </use>
                                    </svg>

                                    <p>Whatsapp</p>
                                </a>
                                    <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultIndeterminate7" unchecked>
                                            <label class="custom-control-label" for="defaultIndeterminate7"></label>
                                          </div>
                                    </div>
                             </div>

                             <div class="submit_button">
                                <button type="submit" class="btn btn-primary btn-custom">Sumbit</button>
                            </div>
                        </div>



                    </div>
                </div>
            </div>



            {{-- Help Modal --}}
            <div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                            <li class="list-group -item"><img src="{{ asset('Images/Help/SocialLinks/1.png') }}" alt="" ></li>
                            <li class="list-group-item"><strong>Step 2:</strong>&Tab;Enter the URL address or (Phone Number for Whatsapp)</li>
                            <li class="list-group -item"><img src="{{ asset('Images/Help/SocialLinks/2.png') }}" alt="" ></li>
                            <li class="list-group-item"><strong>Step 3:</strong>&Tab;For publish tick the checkbox</li>
                            <li class="list-group -item"><img src="{{ asset('Images/Help/SocialLinks/3.png') }}" alt="" ></li>
                            <li class="list-group-item"><strong>Step 4:</strong>&Tab;Click Submit Button</li>
                            <li class="list-group -item"><img src="{{ asset('Images/Help/SocialLinks/4.png') }}" alt="" ></li>
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
