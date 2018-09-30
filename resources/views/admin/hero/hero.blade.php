@extends('layouts.adminapp')

@section('content')


<section class="admin-header py-4">
    <div class="container">
        <div class="row no-row">
            <div class="col-md-12 no-col">
                <h2><i class="fas fa-cogs"></i>Hero Section</h2><a class="text-right" href="" data-toggle="modal" data-target="#addImageModal"><i class="fas fa-plus text-right"></i></a>

            </div>
        </div>
    </div>
</section>

<div class="menu py-4">
    <div class="container admin">
        <div class="row no-row justify-content-start">
            <div class="col-md-3 no-col">
                @include('layouts.sidenav')
            </div>
            <div class="col-md-9 no-col">
                <div class="card">
                    <div class="card-header admin__card-header">
                        Services
                    </div>
                    <div class="card-body">
                        <ul class="list-group py-4">
                            <li class="list-group-item">
                                <h3><i class="fas fa-font"></i>Text </h3>
                            </li>
                            <li class="list-group-item text-left">
                               <p><strong>Heading: </strong> {{ $heroText->heading  }} </p>
                               <p><strong>Sub-heading: </strong> {{ $heroText->subheading  }} </p>
                               <p><strong>Highlighted text: </strong> {{ $heroText->highlightedtext  }} </p>
                               <div class="text-center">
                               <a href="" data-toggle="modal" data-target="#textModal" class="btn btn-sm btn-success btn-custom">Edit</a>
                               </div>
                            </li>
                            

                        </ul>

                        <ul class="list-group py-4">
                            <li class="list-group-item">
                                <h3><i class="fas fa-font"></i>Image</h3>
                            </li>
                            @foreach ($heroImages as $heroImage)
                            <li class="list-group-item">
                                <img src="{{ $heroImage -> image }}" class="w-100 table-img img-fluid" alt="">
                                <a href="" data-toggle="modal" data-target="#imageModal" class="btn btn-sm btn-success btn-custom">Edit</a>
                                <a href="" data-toggle="modal" data-target="#deleteModal" class="btn btn-sm btn-danger btn-custom">Delete</a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Text Modal --}}
    <div class="modal fade" id="textModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <form action="  {{ route('admin.hero.editHeroText')  }} " method="post" >
            {{  csrf_field() }}
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Hero Text</h5>

                           
                            <div class="social__help">
                                <p>Go To Setting to off this glowing effect</p>
                               <a class="help-animation" href="#"data-toggle="modal" data-target="#helpModal"><i class="fas fa-question-circle"></i>Help</a>
                            </div>

                </div>
                <div class="modal-body">
                     
                                <div class="form-group">
                                    <input placeholder="Heading" name="heading"  type="text" class="form-control admin__form-control">
                                </div>

                                <div class="form-group">
                                        <input placeholder="Sub Heading" name="subheading"  type="text" class="form-control admin__form-control">
                                </div>

                                <div class="form-group">
                                        <input placeholder="Highlighted Heading" name="highlightedtext"  type="text" class="form-control admin__form-control">
                                </div>
                           
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-custom btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-custom btn-primary">Edit Hero Text</button>
                </div>
            </div>
        </div>
        </form>
    </div>


    {{-- Image Modal --}}
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <form action="  {{ route('admin.hero.editHeroImage')  }} " method="post" >
            {{  csrf_field() }}
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Hero Image</h5>

                </div>
                <div class="modal-body">
                        <form action="">
                                <div class="form-group">
                                        <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text admin__upload-button" id="inputGroupFileAddon01">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <p>hello {{ $heroImage -> id  }}</p>
                                                  <input type="file" class="custom-file-input" name="image"  id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                  <label class="custom-file-label admin__upload-lable" for="inputGroupFile01">Choose file</label>
                                                </div>
                                              </div>
                                </div>

                            </form>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-custom btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-custom btn-primary">Edit Hero Image</button>
                </div>
            </div>
        </div>
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

    {{-- choose one option --}}
    <div class="modal fade" id="chooseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Choose One Option</h5>

                </div>
                <div class="modal-body">
                    <div>
                        <h3>Text</h3>
                        {{-- <i class="fas fa-font"> --}}
                    </div>
                    <div>
                        <h3>Image</h3>
                        {{-- <i class="fas fa-image"> --}}
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-custom btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-custom btn-primary">Edit Hero Text</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                    <li class="list-group -item"><img src="{{ asset('Images/Help/Hero/heading.png') }}" alt="" ></li>
                    <li class="list-group-item">Hightlighted Text</li>
                    <li class="list-group -item"><img src="{{ asset('Images/Help/Hero/highlight.png') }}" alt="" ></li>
                    <li class="list-group-item">SubHeading</li>
                    <li class="list-group -item"><img src="{{ asset('Images/Help/Hero/subHeading.png') }}" alt="" ></li>

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
