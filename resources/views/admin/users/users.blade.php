@extends('layouts.adminapp')

@section('content')

@include('sweet::alert')

<div id="content-wrapper">

        <div class="container-fluid">
                <ol class="breadcrumb admin-header">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.users') }}"> <i class="fas fa-users"></i> Users </a>
                    </li>
                    <li class="breadcrumb-item active">Overview</li>

                </ol>


                <div class="card box-border" style="border:initial;">
                        <div class="card-header admin__card-header">
                            Users
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table id="example" class="table display table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Copy</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $user -> name }}</td>
                                        <td>{{ $user -> email }}</td>
                                        <td>Copy</td>
                                    <?php $no++ ?>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>

                        </div>
                    </div>
        </div>
</div>






            @endsection

            @section('page-script')
            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('#example').DataTable();
                });

                 $('#editModal').on('show.bs.modal', function (event) {

                var button = $(event.relatedTarget)
                var id = button.data('id')
                var heading = button.data('head')
                var link = button.data('link')

                console.log(id);
                var modal = $(this)
                modal.find('.modal-body #newsid').val(id)
                modal.find('.modal-body #editheading').val(heading)
                modal.find('.modal-body #editlink').val(link)

                });

                $('#deleteModal').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget)
                    var deleteid = button.data('deleteid')
                    console.log(deleteid)
                    var modal = $(this)

                    modal.find('.modal-body #deleteid').val(deleteid)
                });

            </script>
            @endsection
