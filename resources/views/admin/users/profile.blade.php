@extends('layouts.adminapp')

@section('content')

@include('sweet::alert')

<div id="content-wrapper">

    <div class="container-fluid">
        <ol class="breadcrumb admin-header">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.services') }}"> <i class="fas fa-sliders-h pr-2"></i> Setting </a>
            </li>
            <li class="breadcrumb-item active">Profile</li>

        </ol>

        <div class="card box-border" style="border:initial;">
            <div class="card-header admin__card-header">
                Profile
            </div>
            <div class="card-body" style="text-align:start;">
                <form action=" {{ route('admin.service.store')  }}  " method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input placeholder="Name" name="name" id="name" type="text" class="form-control admin__form-control"
                            value="{{ $user -> name }}">

                        <strong>
                            <p class="text-danger">{{ $errors->first('heading') }}</p>
                        </strong>
                    </div>



                            <a href="" data-toggle="modal" data-target="#addModal" class="btn btn-custom mr-4" style="    color: #5c8df6 !important;
                                background: #fff !important;
                                border-color: #5c8df6;
                                font-weight: 500;"><i class="far fa-user-circle pr-2"></i>Choose
                                Avatar</a>



                                <a href="" data-toggle="modal" data-target="#passwordModal" class="btn btn-custom"
                                    style="color: #f3628d  !important;
                                    background: #fff !important;
                                    border-color: #f3628d;
                                    font-weight: 500;"
                                    >
                                    <i class="fas fa-lock pr-2"></i>
                                Change Password
                                </a>

                    <button type="submit" class="btn btn-custom btn-admin mb-2 d-block my-3"><i class="fas fa-check-circle pr-2"></i>Submit</button>
                </form>
            </div>
        </div>

    </div>
</div>


{{-- Avatar Modal --}}
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <form action="  {{ route('admin.user.profile.avatar') }} " method="post">

        {{ csrf_field() }}
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background:#fff !important;">
                <div class="modal-header" style="border: initial;">
                    <h5 class="modal-title" id="exampleModalLongTitle">Choose an Avatar</h5>

                </div>
                <div class="modal-body">
                    <div class="d-flex flex-row">
                        <div>
                            <svg class=" mr-2 mt-2 circle-all about__header box-border" style="backgroud:#f5f6fa !imporatant;">
                                <use xlink:href="{{ asset('Images/Face/avatar.svg#icon-1') }}">
                                </use>
                            </svg>
                            <div class="pretty p-icon p-round p-pulse">
                                <input type="radio" name="avatar" value="1">
                                <div class="state p-info-o">
                                    <i class="icon fas fa-check-circle" style="color:#5c8df6;"></i>
                                    <label> Avatar 1</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg class=" mr-2 mt-2 circle-all about__header box-border" style="backgroud:#f5f6fa !imporatant;">
                                <use xlink:href="{{ asset('Images/Face/avatar.svg#icon-2') }}">
                                </use>
                            </svg>
                            <div class="pretty p-icon p-round p-pulse">
                                <input type="radio" name="avatar" value="2">
                                <div class="state p-info-o">
                                    <i class="icon fas fa-check-circle" style="color:#5c8df6;"></i>
                                    <label> Avatar 2</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg class=" mr-2 mt-2 circle-all about__header box-border" style="backgroud:#f5f6fa !imporatant;">
                                <use xlink:href="{{ asset('Images/Face/avatar.svg#icon-3') }}">
                                </use>
                            </svg>
                            <div class="pretty p-icon p-round p-pulse">
                                <input type="radio" name="avatar" value="3">
                                <div class="state p-info-o">
                                    <i class="icon fas fa-check-circle" style="color:#5c8df6;"></i>
                                    <label> Avatar 3</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg class=" mr-2 mt-2 circle-all about__header box-border" style="backgroud:#f5f6fa !imporatant;">
                                <use xlink:href="{{ asset('Images/Face/avatar.svg#icon-4') }}">
                                </use>
                            </svg>
                            <div class="pretty p-icon p-round p-pulse">
                                <input type="radio" name="avatar" value="4">
                                <div class="state p-info-o">
                                    <i class="icon fas fa-check-circle" style="color:#5c8df6;"></i>
                                    <label> Avatar 4</label>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="d-flex flex-row pt-4">
                        <div>
                            <svg class=" mr-2 mt-2 circle-all about__header box-border" style="backgroud:#f5f6fa !imporatant;">
                                <use xlink:href="{{ asset('Images/Face/avatar.svg#icon-5') }}">
                                </use>
                            </svg>
                            <div class="pretty p-icon p-round p-pulse">
                                <input type="radio" name="avatar" value="5">
                                <div class="state p-info-o">
                                    <i class="icon fas fa-check-circle" style="color:#5c8df6;"></i>
                                    <label> Avatar 5</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg class=" mr-2 mt-2 circle-all about__header box-border" style="backgroud:#f5f6fa !imporatant;">
                                <use xlink:href="{{ asset('Images/Face/avatar.svg#icon-6') }}">
                                </use>
                            </svg>
                            <div class="pretty p-icon p-round p-pulse">
                                <input type="radio" name="avatar" value="6">
                                <div class="state p-info-o">
                                    <i class="icon fas fa-check-circle" style="color:#5c8df6;"></i>
                                    <label> Avatar 6</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg class=" mr-2 mt-2 circle-all about__header box-border" style="backgroud:#f5f6fa !imporatant;">
                                <use xlink:href="{{ asset('Images/Face/avatar.svg#icon-7') }}">
                                </use>
                            </svg>
                            <div class="pretty p-icon p-round p-pulse">
                                <input type="radio" name="avatar" value="7">
                                <div class="state p-info-o">
                                    <i class="icon fas fa-check-circle" style="color:#5c8df6;"></i>
                                    <label> Avatar 7</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg class=" mr-2 mt-2 circle-all about__header box-border" style="backgroud:#f5f6fa !imporatant;">
                                <use xlink:href="{{ asset('Images/Face/avatar.svg#icon-8') }}">
                                </use>
                            </svg>
                            <div class="pretty p-icon p-round p-pulse">
                                <input type="radio" name="avatar" value="8">
                                <div class="state p-info-o">
                                    <i class="icon fas fa-check-circle" style="color:#5c8df6;"></i>
                                    <label> Avatar 8</label>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="d-flex flex-row pt-4">
                        <div>
                            <svg class=" mr-2 mt-2 circle-all about__header box-border" style="backgroud:#f5f6fa !imporatant;">
                                <use xlink:href="{{ asset('Images/Face/avatar.svg#icon-9') }}">
                                </use>
                            </svg>
                            <div class="pretty p-icon p-round p-pulse">
                                <input type="radio" name="avatar" value="9">
                                <div class="state p-info-o">
                                    <i class="icon fas fa-check-circle" style="color:#5c8df6;"></i>
                                    <label> Avatar 9</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg class=" mr-2 mt-2 circle-all about__header box-border" style="backgroud:#f5f6fa !imporatant;">
                                <use xlink:href="{{ asset('Images/Face/avatar.svg#icon-10') }}">
                                </use>
                            </svg>
                            <div class="pretty p-icon p-round p-pulse">
                                <input type="radio" name="avatar" value="10">
                                <div class="state p-info-o">
                                    <i class="icon fas fa-check-circle" style="color:#5c8df6;"></i>
                                    <label> Avatar 10</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg class=" mr-2 mt-2 circle-all about__header box-border" style="backgroud:#f5f6fa !imporatant;">
                                <use xlink:href="{{ asset('Images/Face/avatar.svg#icon-11') }}">
                                </use>
                            </svg>
                            <div class="pretty p-icon p-round p-pulse">
                                <input type="radio" name="avatar" value="11">
                                <div class="state p-info-o">
                                    <i class="icon fas fa-check-circle" style="color:#5c8df6;"></i>
                                    <label> Avatar 11</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg class=" mr-2 mt-2 circle-all about__header box-border" style="backgroud:#f5f6fa !imporatant;">
                                <use xlink:href="{{ asset('Images/Face/avatar.svg#icon-12') }}">
                                </use>
                            </svg>
                            <div class="pretty p-icon p-round p-pulse">
                                <input type="radio" name="avatar" value="12">
                                <div class="state p-info-o">
                                    <i class="icon fas fa-check-circle" style="color:#5c8df6;"></i>
                                    <label> Avatar 12</label>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="d-flex flex-row">
                        <div>
                            <svg class=" mr-2 mt-2 circle-all about__header box-border" style="backgroud:#f5f6fa !imporatant;">
                                <use xlink:href="{{ asset('Images/Face/avatar.svg#icon-13') }}">
                                </use>
                            </svg>
                            <div class="pretty p-icon p-round p-pulse">
                                <input type="radio" name="avatar" value="13">
                                <div class="state p-info-o">
                                    <i class="icon fas fa-check-circle" style="color:#5c8df6;"></i>
                                    <label> Avatar 13</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg class=" mr-2 mt-2 circle-all about__header box-border" style="backgroud:#f5f6fa !imporatant;">
                                <use xlink:href="{{ asset('Images/Face/avatar.svg#icon-14') }}">
                                </use>
                            </svg>
                            <div class="pretty p-icon p-round p-pulse">
                                <input type="radio" name="avatar" value="14">
                                <div class="state p-info-o">
                                    <i class="icon fas fa-check-circle" style="color:#5c8df6;"></i>
                                    <label> Avatar 14</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg class=" mr-2 mt-2 circle-all about__header box-border" style="backgroud:#f5f6fa !imporatant;">
                                <use xlink:href="{{ asset('Images/Face/avatar.svg#icon-15') }}">
                                </use>
                            </svg>
                            <div class="pretty p-icon p-round p-pulse">
                                <input type="radio" name="avatar" value="15">
                                <div class="state p-info-o">
                                    <i class="icon fas fa-check-circle" style="color:#5c8df6;"></i>
                                    <label> Avatar 15</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <svg class=" mr-2 mt-2 circle-all about__header box-border" style="backgroud:#f5f6fa !imporatant;">
                                <use xlink:href="{{ asset('Images/Face/avatar.svg#icon-16') }}">
                                </use>
                            </svg>
                            <div class="pretty p-icon p-round p-pulse">
                                <input type="radio" name="avatar" value="16">
                                <div class="state p-info-o">
                                    <i class="icon fas fa-check-circle" style="color:#5c8df6;"></i>
                                    <label> Avatar 16</label>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-custom btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle pr-2"></i>Close</button>
                    <button type="submit" class="btn btn-custom btn-admin"><i class="fas fa-check-circle pr-2"></i>Ok</button>
                </div>


            </div>
        </div>
    </form>
</div>

{{-- Password Change Modal --}}
<div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
aria-hidden="true">
<form action="  {{ route('admin.user.profile.password.change')  }} " method="post" >

    {{ csrf_field() }}
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>

            </div>
            <div class="modal-body">

                    <div class="form-group">

                            <input type="password" name="curPassword" class="form-control admin__form-control" placeholder="Current Password">

                    </div>

                    <div class="form-group">

                            <input type="password" name="newPassword" class="form-control admin__form-control" placeholder="New Password">

                    </div>

                    <div class="form-group">

                            <input type="password" name="confPassword" class="form-control admin__form-control" placeholder="Confirm password">

                    </div>





            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-custom btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-custom btn-admin"><i class="fas fa-check-circle pr-2"></i>Submit</button>
            </div>
        </div>
    </div>
</form>
</div>




@endsection

@section('page-script')
@endsection
