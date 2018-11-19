@extends('layouts.adminapp')

@section('content')


<div id="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb admin-header">
                <li class="breadcrumb-item">
                    <a href="{{route('admin.about') }}"><i class="fas fa-user-circle"></i> About </a>
                </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            <div class="card box-border" style="border:initial;">
                    <div class="card-header admin__card-header">
                        About
                        <div class="social__help">
                            <p>Go To Setting to off this glowing effect</p>
                            <a class="help-animation" href="#" data-toggle="modal" data-target="#helpModal"><i class="fas fa-question-circle"></i>Help</a>
                        </div>
                    </div>
                    <div class="card-body" style="text-align:start;">
                        <form action="{{ route('admin.about.edit',['id'=> $about -> id]) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input placeholder="Enter the Name" id="name" type="text" class="form-control admin__form-control" value="{{ $about-> name }}" name="name">
                                <strong><p class="text-danger">{{ $errors->first('name') }}</p></strong>
                            </div>

                            <div class="form-group">
                                    <label for="role">Role</label>
                                    <input placeholder="Enter the Role" id="role" type="text" class="form-control admin__form-control" value={{ $about -> role }} name="role">
                                    <strong><p class="text-danger">{{ $errors->first('role') }}</p></strong>
                                </div>

                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text admin__upload-button" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                                            aria-describedby="inputGroupFileAddon01" name="image">
                                        <label class="custom-file-label admin__upload-lable" for="inputGroupFile01">Choose
                                            Image</label>
                                    </div>
                                </div>
                                <strong><p class="text-danger">{{ $errors->first('image') }}</p></strong>
                            </div>

                            <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea placeholder="Enter the content" name="content" id="editor"  class=" form-control admin__form-control"  name="content" >{{ $about -> content }}</textarea>
                                    <strong><p class="text-danger">{{ $errors->first('content') }}</p></strong>
                                </div>

                            <button type="submit" class="btn btn-custom btn-admin"><i class="fas fa-sync pr-2"></i>Update</button>
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
