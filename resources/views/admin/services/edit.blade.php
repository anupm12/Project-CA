@extends('layouts.adminapp')

@section('content')

<div id="content-wrapper">

        <div class="container-fluid">
                <ol class="breadcrumb admin-header">
                    <li class="breadcrumb-item">
                    <a href="{{ route('admin.services') }}"> <i class="fas fa-cogs"></i> Services </a>
                    </li>
                    <li class="breadcrumb-item active">Edit</li>

        </ol>
        <div class="card box-border" style="border:initial;">
                <div class="card-header admin__card-header">
                    Services
                </div>
                <div class="card-body"  style="text-align:start;">
                    <form action=" {{ route('admin.services.update',['id'=> $service -> id])  }}  " method="post" enctype="multipart/form-data" >
                        {{ csrf_field()  }}
                        <div class="form-group">
                            <label for="heading">Heading</label>
                            <input placeholder="Enter the Heading"  name="heading" id="heading" type="text" class="form-control admin__form-control" value="{{ $service -> heading }}">

                            <strong><p class="text-danger">{{ $errors->first('heading') }}</p></strong>
                        </div>

                        <div class="form-group">
                                <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text admin__upload-button" id="inputGroupFileAddon01">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                          <input type="file" name="image"  class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                          <label class="custom-file-label admin__upload-lable" for="inputGroupFile01">Choose file</label>
                                        </div>
                                      </div>

                                         <strong><p class="text-danger">{{ $errors->first('image') }}</p></strong>
                        </div>

                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea placeholder="Enter the content" name="content" id="editor"  class=" form-control admin__form-control" value="{{ $service -> content }}">{{ $service -> content }}</textarea>

                               <strong><p class="text-danger">{{ $errors->first('content') }}</p></strong>
                        </div>

                        <button type="submit" class="btn btn-custom btn-admin mb-2"><i class="fas fa-check-circle pr-2"></i>Submit</button>
                    </form>
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
