@extends('layouts.adminapp')

@section('content')


@include('sweet::alert')

<div id="content-wrapper">

        <div class="container-fluid">
                <ol class="breadcrumb admin-header">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.download') }}"><i class="fas fa-arrow-circle-down"></i> Downloadable Contents </a>
                    </li>
                    <li class="breadcrumb-item active">Overview</li>
                    <li style="width:100%;" class="py-2">
                        <a href="#"  data-target="#addModal" data-toggle="modal" class="btn-custom btn-sm" style="background:#5c8df6;"><i class="fas fa-plus pr-2"></i>Add</a>
                    </li>
                </ol>

                <div class="card box-border" style="border:initial;">
                        <div class="card-header admin__card-header">
                            Downloadable Contents
                        </div>
                        <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-hover">
                                        <thead>
                                            <th>publish</th>
                                             <th>File Name</th>
                                             <th>Heading</th>
                                             <th>Type</th>
                                             <th></th>
                                             <th>Edit</th>
                                             <th>Delete</th>

                                        </thead>

                                        <tbody>
                                            @foreach ($download as $data)
                                            <tr>
                                                <td><div class="pretty p-icon p-curve  p-tada">
                                                      <input id="publish{{ $data -> id }}" value="{{ $data -> id }}" type="checkbox" {{ $data -> publish? 'checked' : 'unchecked' }} />
                                                        <div class="state p-success">
                                                                <i class="icon fas fa-check"></i>
                                                            <label></label>
                                                        </div>
                                                    </div></td>
                                                <td>{{ $data -> fileName }}</td>
                                                <td>{{ $data -> heading }}</td>
                                                <td>{{ $data -> type }}</td>
                                                <td><a href="{{ $data -> path }}" style="color:#f3628d;" target="_blank"><i class="fas fa-external-link-alt"></i></a></td>
                                                <td><a data-toggle="modal" data-target="#editModal" data-id = {{ $data -> id }} data-head = "{{ $data -> heading }}" data-content="{{ $data -> content }}"  style="color:#5c8df6;" href=""><i class="fas fa-edit"></a></td>
                                                <td><a data-toggle="modal" data-target="#deleteModal" data-deleteid ="{{ $data -> id }}"   class="text-danger" href=""><i class="fas fa-trash-alt"></a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                        </div>
                    </div>
        </div>
</div>




            @include('includes.downloadmodal')

        @endsection
