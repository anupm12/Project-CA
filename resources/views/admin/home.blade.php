@extends('layouts.adminapp')

@section('content')


{{-- <section class="admin-header py-4">
    <div class="container">
        <div class="row no-row">
            <div class="col-md-12 no-col">
                <h2><i class="fas fa-tachometer-alt"></i>Dashboard</h2>
            </div>
        </div>
    </div>
</section> --}}

        <div id="content-wrapper">

        <div class="container-fluid">
         <ol class="breadcrumb admin-header">
            <li class="breadcrumb-item">
              <a href="#"><i class="fas fa-tachometer-alt pr-1"></i>Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

        <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100" style="background:#5c8df6 !important;">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">26 New Messages!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100" style="background:#f3628d !important;">
                <div class="card-body">
                  <div class="card-body-icon">
                   <i class="fas fa-users"></i>
                  </div>
                  <div class="mr-5">11 New Tasks!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100" style="background:#454b57 !important;">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-file-contract"></i>
                  </div>
                  <div class="mr-5" style="font-weight:400;"><span style="font-size:20px; font-weight:500;">123</span> New Orders!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100" style="background:#93a0ba !important;">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <div class="mr-5">13 New Tickets!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>

          {{-- Messages Card --}}
          <div class="card box-border" style="border:initial;">
            <div class="card-header admin__card-header">
                Messages <i class="fas fa-comments"></i>
            </div>
            <div class="card-body">
                    <div id="accordion">
                        @foreach($message as $msg)

                            @if(!$msg -> status)
                            <div class="card my-2 msg-card text-left box-border" style="border:initial;">
                              <div class="card-header msg-card-header" style="background-color:#dbe3f4d6 !important ;border: initial;" id="headingOne">
                                <h5 class="mb-0">
                                <button class="btn btn-link msg-btn" data-toggle="collapse" data-target="#collapse{{ $msg -> id }}" aria-expanded="true" aria-controls="collapse{{ $msg -> id }}" id="msg{{ $msg -> id }}" >
                                    <span class="px-2"><span class="mr-1" style="color:#f3628d !important;"><i class="fas fa-envelope"></i></span>{{ $msg -> name }}</span><i class="fas fa-arrow-circle-down"></i>
                                  </button>
                                    <p class="float-right mb-0 text-muted" style="font-size: 12px;">{{ $msg -> created_at->format('d/m/Y') }}</p>
                                </h5>
                              </div>

                            <div id="collapse{{ $msg -> id }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body text-left">
                                    <p>Message:
                                        <span class="d-block gery-color-text para" style="font-weight:400 !important;">{{ $msg -> content }}</span>
                                    </p>
                                </div>
                                <div class="card-footer" style="background:#d4dced !important;">
                                    <p>Email:<span style="font-weight:400;">{{ $msg -> email }}</span></p>
                                <p>Phone:<span style="font-weight:400;">{{ $msg -> phone }}</span></p>
                                </div>
                              </div>
                            </div>

                            @else

                            <div class="card my-2 text-left msg-card" style="background-color:#edf2fa !important;border: initial;" >
                                    <div class="card-header msg-card-header" style="background-color:#edf2fa !important; border: initial;" id="headingOne">
                                      <h5 class="mb-0">
                                      <button class="btn btn-link msg-btn" data-toggle="collapse" data-target="#collapse{{ $msg -> id }}" aria-expanded="true" aria-controls="collapse{{ $msg -> id }}">
                                          <span class="px-2"><span class="mr-1" style="color:#5c8df6;"><i class="fas fa-envelope-open"></i></span>{{ $msg -> name }}</span><i class="fas fa-arrow-circle-down"></i>
                                        </button>
                                        <p class="float-right mb-0 text-muted" style="font-size: 12px;">{{ $msg -> created_at->format('d/m/Y') }}</p>
                                      </h5>
                                    </div>

                                  <div id="collapse{{ $msg -> id }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                      <div class="card-body text-left" style="background-color:#edf2fa !important;">
                                         <p>Message:
                                            <span class="d-block gery-color-text para" style="font-weight:400 !important;">{{ $msg -> content }}</span>
                                         </p>

                                      </div>
                                      <div class="card-footer" style="background-color:#e1e7f0 !important">
                                          <p class="mr-1">Email:<span style="font-weight:400;" id="copyEmail{{ $msg -> id }}">{{ $msg -> email }}</span>
                                            <button data-clipboard-target="#copyEmail{{ $msg -> id }}" class="btn badge badge-c float-right copy-button">copy</button>
                                        </p>
                                      <p class="mr-1">Phone:<span style="font-weight:400; id="copyPhone{{ $msg -> id }}">{{ $msg -> phone }}</span>
                                        <button data-clipboard-target="#copyPhone{{ $msg -> id }}" class="btn badge badge-c float-right copy-button">copy</button>
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                            @endif
                        @endforeach
                          </div>
            </div>
        </div>
        </div>
        </div>




        @endsection

        @section('page-script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
            <script>

                $(document).ready(function(){
                    var clipboard = new ClipboardJS('.copy-button');
                    @foreach($message as $msg)
                    $("#collapse{{ $msg -> id }}").on('shown.bs.collapse',function(){
                       $.ajax({
                           type:'get',
                           data:'msgId='+{{ $msg -> id }},
                           url: '{{url('admin/updateInbox')}}',
                           success:function(response){
                               console.log(response);
                           }
                       });
                    })
                    @endforeach



                });
            </script>
        @endsection
