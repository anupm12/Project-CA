@extends('layouts.adminapp')

@section('content')

@include('sweet::alert')
<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb admin-header">
            <li class="breadcrumb-item">
                <a href="{{route('admin.about') }}"><i class="fas fa-user-circle"></i> About </a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
            <li style="width:100%;" class="py-2">
                <a href="{{ route('admin.about.aboutAdd') }}" class="btn-custom btn-sm" style="background:#5c8df6;"><i class="fas fa-plus pr-2"></i>Add</a>
            </li>
        </ol>

        <div class="card box-border" style="border:initial;">
                <div class="card-header admin__card-header">
                    About
                </div>
                <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-hover">
                                <thead>
                                     <th>Image</th>
                                     <th>Name</th>
                                     <th>Role</th>
                                     <th>Edit</th>
                                     <th>Delete</th>
                                </thead>

                                <tbody>
                                    @foreach($about as $data)
                                    <tr>
                                        <td><img class="img-circle img-fluid" src="{{ $data -> image }}" alt="{{ $data -> name }}" style="width:6.25rem; border-radius:50%;"></td>
                                        <td>{{ $data -> name }}</td>
                                        <td>{{ $data -> role }}</td>
                                        <td><a style="color:#5c8df6;" href="{{ route('admin.about.aboutEdit',['id'=>$data->id]) }} "><i class="fas fa-edit"></i></a></td>
                                        <td>
                                            <a href="" data-toggle="modal" data-deleteid="{{ $data -> id }}" data-target="#deleteModal" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                </div>
            </div>
    </div>
</div>


            {{-- Delete --}}
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <form action="  {{ route('admin.about.delete')  }} " method="post" >
             {{ csrf_field() }}
             {{ method_field('PATCH') }}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                    <input type="hidden" name="_method" value="patch">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" id="deleteid" value="">
                <h4>Are You Sure You Want to Delete 🙁</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-custom" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger btn-custom">Confirm Delete</>
            </div>
        </div>
    </div>
</div>

@endsection



@section('page-script')
<script>
       $('#deleteModal').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget)
                    var deleteid = button.data('deleteid')

                    var modal = $(this)

                    modal.find('.modal-body #deleteid').val(deleteid)
                });
</script>
@endsection
