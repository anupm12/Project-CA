@extends('layouts.adminapp')

@section('content')


<section class="header py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><i class="fas fa-download"></i>News</h2>

            </div>
        </div>
    </div>
</section>

<div class="menu py-4">
    <div class="container admin">
        <div class="row ">
            <div class="col-md-3">
                @include('layouts.sidenav')
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header admin__card-header">
                        About
                        <div class="social__help">
                            <p>Go To Setting to off this glowing effect</p>
                            <a class="help-animation" href="#" data-toggle="modal" data-target="#helpModal"><i class="fas fa-question-circle"></i>Help</a>
                        </div>
                    </div>
                    <div class="card-body" style="text-align:start;">
                        <form action="">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input placeholder="Enter the Name" id="name" type="text" class="form-control admin__form-control">
                            </div>

                            <div class="form-group">
                                    <label for="url">Url</label>
                                    <input placeholder="Enter the Url" id="role" type="text" class="form-control admin__form-control">
                            </div>

                            <button type="submit" class="btn btn-custom btn btn-custom btn-primary mb-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

