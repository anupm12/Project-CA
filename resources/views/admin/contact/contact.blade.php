@extends('layouts.adminapp')

@section('content')
@include('sweet::alert')


<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb admin-header">
            <li class="breadcrumb-item">
                <a href="{{route('admin.contact') }}"><i class="fas fa-user-circle"></i> Contact </a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
        </ol>

        <div class="card box-border" style="border:initial;">
            <div class="card-header admin__card-header">
                Contact

            </div>
            <div class="card-body" style="text-align:start;">

            <form action="{{ route('admin.contact.publish') }}" method="post" >
                            {{ csrf_field() }}
                <p>
                    <div class="pretty p-icon p-curve  p-tada">
                        <input type="hidden"  name="publishPhone" value="0" >
                        <input id="publishPhone" value="1" type="checkbox" name="publishPhone"
                            {{ $contact -> publishPhone? 'checked' : 'unchecked' }} />
                        <div class="state p-success">
                            <i class="icon fas fa-check"></i>
                            <label></label>
                        </div>
                    </div>
                    Phone: {{ $contact -> phone }}
                </p>

                <p>
                    <div class="pretty p-icon p-curve  p-tada">
                        <input type="hidden"  name="publishMobile" value="0" >
                        <input id="publishMobile" value="1" type="checkbox" name="publishMobile"
                            {{ $contact -> publishMobile? 'checked' : 'unchecked' }} />
                        <div class="state p-success">
                            <i class="icon fas fa-check"></i>
                            <label></label>
                        </div>
                    </div>
                    Mobile: {{ $contact -> mobile }}
                </p>
                <p>
                    <div class="pretty p-icon p-curve  p-tada">
                        <input type="hidden"  name="publishEmail" value="0" >
                        <input id="publishEmail" value="1" type="checkbox" name="publishEmail"
                            {{ $contact -> publishEmail? 'checked' : 'unchecked' }} />
                        <div class="state p-success">
                            <i class="icon fas fa-check"></i>
                            <label></label>
                        </div>
                    </div>
                    Email: {{ $contact -> email }}
                </p>
                <p>
                    <div class="pretty p-icon p-curve  p-tada">
                        <input type="hidden"  name="publishAddress" value="0" >
                        <input id="publishAddress" value="1" type="checkbox" name="publishAddress"
                            {{ $contact -> publishAddress? 'checked' : 'unchecked' }} />
                        <div class="state p-success">
                            <i class="icon fas fa-check"></i>
                            <label></label>
                        </div>
                    </div>
                    Address: {{ $contact -> address }}
                </p>


                <div>
                        <div class="pretty p-icon p-curve  p-tada">
                            <input type="hidden"  name="publishMap" value="0" >
                            <input id="publishMap" value="1" type="checkbox" name="publishMap"
                                {{ $contact -> publishMap? 'checked' : 'unchecked' }} />
                            <div class="state p-success">
                                <i class="icon fas fa-check"></i>
                                <label></label>
                            </div>
                        </div>
                        Map:{!! $contact -> map !!}
                    </div>
                    <button type="submit" class="btn btn-custom btn-admin my-2"><i class="fas fa-check-circle pr-2"></i>Publish</button>
            </form>

                <form action="{{ route('admin.contact.change') }}" method="post" class="py-4">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input placeholder="Enter the phone number" id="phone" type="text" class="form-control admin__form-control"
                            name="phone">
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input placeholder="Enter the mobile number" id="mobile" type="text" class="form-control admin__form-control"
                            name="mobile">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input placeholder="Enter the email" id="email" type="email" class="form-control admin__form-control"
                            name="email">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea placeholder="Enter the address" name="address" class=" form-control admin__form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <p><a href="" style="color:#333;">Link</a></p>
                        <label for="address">Map</label>
                        <textarea placeholder="Past the map link" name="map" class=" form-control admin__form-control"></textarea>
                    </div>


                    <button type="submit" class="btn btn-custom btn-admin"><i class="fas fa-check-circle pr-2"></i>Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection

@section('page-script')

@endsection
