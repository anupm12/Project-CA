@extends('layouts.adminapp')

@section('content')


<section class="header py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><i class="fas fa-cogs"></i>Services<span class="add">+</span></h2>

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
                        Services
                    </div>
                    <div class="card-body"  style="text-align:start;">
                        <form action="">
                            <div class="form-group">
                                <label for="heading">Heading</label>
                                <input placeholder="Enter the Heading" id="heading" image="image" type="text" class="form-control admin__form-control">
                            </div>

                            <div class="form-group">
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text admin__upload-button" id="inputGroupFileAddon01">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                              <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                              <label class="custom-file-label admin__upload-lable" for="inputGroupFile01">Choose file</label>
                                            </div>
                                          </div>
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea placeholder="Enter the content" name="content" id="editor"  class=" form-control admin__form-control"></textarea>
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

        @section('page-script')
        <script src={{URL::asset("/vendor/unisharp/laravel-ckeditor/ckeditor.js") }}></script>
        <script>
            CKEDITOR.replace( 'editor' );
        </script>
        @endsection
