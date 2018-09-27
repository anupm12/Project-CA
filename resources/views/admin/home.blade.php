@extends('layouts.adminapp')

@section('content')


<section class="header py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><i class="fas fa-tachometer-alt"></i>Dashboard</h2>
            </div>
        </div>
    </div>
</section>

<div class="menu py-4">
    <div class="container admin">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <ul class="list-group list-group-custom">
                    <li class="list-group-item "><a href="#"><i class="fas fa-tachometer-alt"></i>Dasboard</a></li>
                    <li class="list-group-item"><a href="#" data-toggle="collapse" data-target="#hero-section"><i class="fas fa-file"></i>Hero
                            Section<i class="fas fa-angle-down"></i></a></li>
                    <div id="hero-section" class="collapse">
                        <li class="list-group-item list-group-item-collaspse"><i class="fas fa-font"></i><a href="#">Text</a></li>
                        <li class="list-group-item list-group-item-collaspse"><i class="fas fa-image"></i><a href="#">Carousel</a></li>
                    </div>
                    <li class="list-group-item active"><a href="#"><i class="fas fa-user-circle"></i>About</a></li>
                    <li class="list-group-item"><a href="#"><i class="fas fa-cogs"></i>Services</a></li>
                    <li class="list-group-item"><a href="#"><i class="fab fa-twitter"></i>Social Media Links</a></li>
                    <li class="list-group-item"><a href="#"><i class="fas fa-address-card"></i>Contact</a></li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header admin__card-header">
                        WebSite Overview
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body admin__card-body">
                                            <h5 class="card-title">User</h5>
                                            <h4><i class="fas fa-user"></i></h4>
                                            <h4>240</h4>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body admin__card-body">
                                            <h5 class="card-title">Downloadable Contents</h5>
                                            <h4><i class="fas fa-download"></i></h4>
                                            <h4>50</h4>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body admin__card-body">
                                            <h5 class="card-title">News</h5>
                                            <h4><i class="fas fa-newspaper"></i></h4>
                                            <h4>50</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card admin__card-body">
                                        <div class="card-body">
                                            <h5 class="card-title">Messages</h5>
                                            <h4><i class="fas fa-comments"></i></h4>
                                            <h4>20</h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Row -2 --}}
            <div class="container my-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header admin__card-header">
                                Messages <i class="fas fa-comments"></i>
                            </div>
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
