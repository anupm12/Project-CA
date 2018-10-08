@extends('layouts.adminapp')

@section('content')


@include('sweet::alert')

<section class="admin-header py-4">
    <div class="container">
        <div class="row no-row px-3">
            <div class="col-md-12 no-col">
                <h2><i class="fas fa-file-download"></i></i>Download<span class="add"><a href="#" data-target="#addModal" data-toggle="modal" class="btn btn-primary btn-custom">Add</a></span></h2>

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
                        Downloadable Contents
                    </div>
                    <div class="card-body">
                            <table class="table table-hover">
                                    <thead>
                                         <th>File Name</th>
                                         <th>Heading</th>
                                         <th>Edit</th>
                                         <th>Delete</th>
                                    </thead>

                                    <tbody>
                                        <td><img src="" alt=""></td>
                                        <td>PayRoll</td>
                                        <td><a data-toggle="modal" data-target="#editModal" class="btn btn-sm btn-success" href="">Edit</a></td>
                                        <td><a data-toggle="modal" data-target="#deleteModal" class="btn btn-sm btn-danger" href="">Delete</a></td>
                                    </tbody>

                                </table>
                    </div>
                </div>
            </div>


            @include('includes.downloadmodal')

        @endsection
