@extends('layouts.adminapp')

@section('content')
@include('sweet::alert')

<div id="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb admin-header">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.hero') }}"><i class="fas fa-user-circle"></i> Hero Section </a>
                </li>
                <li class="breadcrumb-item active">Overview</li>
            </ol>

            <div class="card box-border" style="border:initial;">
                    <div class="card-header admin__card-header">
                        Services
                    </div>
                    <div class="card-body">
                        <ul class="list-group box-border" >
                            <li class="list-group-item li-hero" style="background:#f5f6fa;">
                                <h3>Text </h3>
                            </li>
                            <li class="list-group-item li-hero text-left">
                                <p class="p-line"><strong>Heading: </strong> {{ $heroText->heading }} </p>
                                <p class="p-line"><strong>Sub-heading: </strong> {{ $heroText->subheading }} </p>
                                <p class="p-line"><strong>Highlighted text: </strong> {{ $heroText->highlightedtext }} </p>
                                <div class="text-center">
                                    <a href="" data-toggle="modal" data-target="#textModal" class="btn btn-custom" style="color: #5c8df6 !important;border-color: #5c8df6;font-weight: 500;"><i class="fas fa-edit pr-2"></i>Edit</a>
                                </div>
                            </li>


                        </ul>

                        <ul class="list-group box-border mt-3">
                            <li class="list-group-item li-hero" style="background:#f5f6fa;">
                                <h3 ><i class="fas fa-images admin-icon mr-2" style="color:#5c8df6;"></i>Image</h3>
                            </li>
                            <?php $no = 1; ?>
                            @foreach ($heroImages as $heroImage)
                            <li class="list-group-item li-hero">
                                <span class="pr-3" style="color:#5c8df6">Image {{ $no }}</span>
                                <img class="p-line" src="{{ $heroImage -> image }}" class="img-fluid" alt="" style="width:250px;" >
                                <a class="pl-3 btn btn-custom" href="" data-toggle="modal" data-id="{{ $heroImage->id }}" data-target="#imageModal"
                                    style="color:#5c8df6 !important; border-color:#5c8df6;"><i class="fas fa-edit"></i>Edit</a>
                            </li>
                            <?php $no++; ?>
                            @endforeach

                        </ul>
                    </div>
                </div>
        </div>
</div>


    {{-- Text Modal --}}
    <div class="modal fade" id="textModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <form action="  {{ route('admin.hero.editHeroText')  }} " method="post">
            {{ csrf_field() }}
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Hero Text</h5>

                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <input placeholder="Heading" name="heading" type="text" class="form-control admin__form-control">
                        </div>

                        <div class="form-group">
                            <input placeholder="Sub Heading" name="subheading" type="text" class="form-control admin__form-control">
                        </div>

                        <div class="form-group">
                            <input placeholder="Highlighted Heading" name="highlightedtext" type="text" class="form-control admin__form-control">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-custom btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle pr-2"></i>Close</button>
                        <button type="submit" class="btn btn-custom btn-primary"><i class="fas fa-sync pr-2"></i>Update Hero Text</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


    {{-- Image Modal --}}
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <form action="  {{ route('admin.hero.editHeroImage')  }} " method="post" enctype="multipart/form-data">
            {{ method_field('patch') }}
            {{ csrf_field() }}
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Hero Image</h5>

                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" id="imageid" value="">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text admin__upload-button" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">

                                        <input type="file" class="custom-file-input" name="image" id="inputGroupFile01"
                                            aria-describedby="inputGroupFileAddon01" >
                                        <label class="custom-file-label admin__upload-lable" for="inputGroupFile01">Choose
                                            file</label>
                                    </div>
                                </div>
                            </div>


                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-custom btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle pr-2"></i>Close</button>
                        <button type="submit" class="btn btn-custom btn-primary"><i class="fas fa-sync pr-2"></i>Update Hero Image</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


    {{-- Delete --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4>Are You Sure You Want to Delete 🙁</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="#" class="btn btn-danger">Confirm Delete</a>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add And Edit Social Links</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Heading</li>
                        <li class="list-group -item"><img src="{{ asset('Images/Help/Hero/heading.png') }}" alt=""></li>
                        <li class="list-group-item">Hightlighted Text</li>
                        <li class="list-group -item"><img src="{{ asset('Images/Help/Hero/highlight.png') }}" alt=""></li>
                        <li class="list-group-item">SubHeading</li>
                        <li class="list-group -item"><img src="{{ asset('Images/Help/Hero/subHeading.png') }}" alt=""></li>

                    </ul>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    @endsection


    @section('page-script')
    <script>
        $('#imageModal').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            console.log(id);
            var modal = $(this)
            modal.find('.modal-body #imageid').val(id)
        })

    </script>

    @endsection
