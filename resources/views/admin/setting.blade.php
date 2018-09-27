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
        <div class="row justify-content-center">
            <div class="col-md-3">
                @include('layouts.sidenav')
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header admin__card-header">
                    </div>
                    <div class="card-body">
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
                                <button type="submit" class="btn btn-primary btn-custom">Save Change</button>
                            </div>
                        </form>
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
