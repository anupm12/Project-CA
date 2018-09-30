@extends('layouts.adminapp')

@section('content')


<section class="admin-header py-4">
    <div class="container">
        <div class="row no-row">
            <div class="col-md-12 no-col">
                <h2><i class="fas fa-cogs"></i>About<span class="add">+</span></h2>

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
                        About
                    </div>
                    <div class="card-body">
                            <table class="table table-hover">
                                    <thead>
                                         <th>Image</th>
                                         <th>Name</th>
                                         <th>Role</th>
                                         <th>About</th>
                                         <th>Edit</th>
                                         <th>Delete</th>
                                    </thead>

                                    <tbody>
                                        <td><img src="" alt=""></td>
                                        <td>PayRoll</td>
                                        <td><a class="btn btn-sm btn-success" href="">Edit</a></td>
                                        <td><a class="btn btn-sm btn-danger" href="">Delete</a></td>
                                    </tbody>

                                </table>
                    </div>
                </div>
            </div>


        @include('includes.aboutmodal')

        @endsection
