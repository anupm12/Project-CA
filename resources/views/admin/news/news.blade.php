@extends('layouts.adminapp')

@section('content')

@include('sweet::alert')
<section class="admin-header py-4">
    <div class="container">
        <div class="row no-row">
            <div class="col-md-12 no-col">
                <h2><i class="fas fa-newspaper"></i>News<span class="add"><a href="#" data-toggle="modal" data-target="#addModal" class="btn btn-primary btn-custom text-center"><i class="fas fa-plus-circle"></i></a></span></h2>

            </div>
        </div>
    </div>
</section>

<div class="menu py-4">
    <div class="container admin">
        <div class="row no-row ">
            <div class="col-md-3 no-col">
                @include('layouts.sidenav')
            </div>
            <div class="col-md-9 no-col">
                <div class="card">
                    <div class="card-header admin__card-header">
                        Services
                    </div>
                    <div class="card-body">
                        <table id="example" class="table display table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Heading</th>
                                    <th>Link</th>
                                    <th>Eidt</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach($news as $news1)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $news1 -> heading }}</td>
                                    <td><a href="{{ 'https://'.$news1 -> link }}" >{{ $news1 -> link }}</a></td>
                                <td><a href="" data-toggle="modal" data-id="{{ $news1 -> id }}" data-head = "{{ $news1 -> heading }}" data-link = "{{ $news1 -> link }}" data-target="#editModal"
                                            class="btn btn-sm btn-success btn-custom text-center mr-2"><i class="fas fa-edit"></i></a>
                                    </td>
                                    <td> <a href="" data-toggle="modal" data-deleteid="{{ $news1 -> id }}" data-target="#deleteModal"
                                            class="btn btn-sm btn-danger btn-custom text-center"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                <?php $no++ ?>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>



    {{-- Add Modal --}}
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <form action="  {{ route('admin.news.add')  }} " method="post" >

        {{ csrf_field() }}
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add News</h5>

                </div>
                <div class="modal-body">

                        <div class="form-group">

                                <input type="text" name="heading" class="form-control admin__form-control" placeholder="Heading">

                        </div>

                        <div class="form-group">

                                        <input type="text" placeholder="Link" name="link" class="form-control admin__form-control">
                        </div>



                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-custom btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-custom btn-primary">Add</button>
                </div>
            </div>
        </div>
    </form>
    </div>




    {{-- Edit Modal --}}
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <form action="  {{ route('admin.news.edit')  }} " method="post" >
        {{ method_field('patch') }}
        {{ csrf_field() }}
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit News</h5>

                </div>
                <div class="modal-body">
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" id="newsid" value="">
                        <div class="form-group">

                                <input type="text" id="editheading" value="" name="heading" class="form-control admin__form-control" placeholder="Heading">

                        </div>

                        <div class="form-group">

                                        <input type="text" id="editlink" value="" placeholder="Link" name="link" class="form-control admin__form-control">
                        </div>



                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-custom btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-custom btn-primary">Edit News</button>
                </div>
            </div>
        </div>
    </form>
    </div>


{{-- Delete --}}
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <form action="  {{ route('admin.news.delete')  }} " method="post" >
            {{ method_field('patch') }}
            {{ csrf_field() }}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                    <input type="hidden" name="_method" value="PATCH">
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
