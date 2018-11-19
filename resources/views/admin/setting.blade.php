@extends('layouts.adminapp')

@section('content')

<div id="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb admin-header">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.social') }}"><i class="fas fa-sliders-h pr-2" style="color:#5c8df6;"></i>Setting</a>
                </li>

            </ol>
            <div class="card box-border" style="border:initial;">
                    <div class="card-header admin__card-header">
                        Setting
                    </div>
                    <div class="card-body">
                    <a href="{{ route('admin.user.profile',['id'=> Auth::guard('admin')->user()->id]) }}" class="btn btn-custom btn-admin my-3" style="float: left;"><i class="fas fa-user-circle pr-2"></i>User Profile</a>
                        <form action="">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Typing Effect</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" id="typing" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Glowing Effect</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" id="typing" checked>
                                                <span class="slider round"></span>
                                            </label></td>
                                    </tr>


                                </tbody>
                            </table>
                            <div class="submit_button">
                                <button type="submit" class="btn btn-custom btn-admin"><i class="fas fa-save pr-2"></i>Save Change</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
</div>





            @endsection

            @section('page-script')
            <script>
                $('#typing').change(function () {
                    if ($(this).is(":checked")) {
                        $('.typing').attr("id", "typed");
                    } else {
                        $('.typing').attr("id", "typed");
                    }
                });

            </script>
            @endsection
