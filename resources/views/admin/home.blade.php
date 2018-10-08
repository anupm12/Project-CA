@extends('layouts.adminapp')

@section('content')


<section class="admin-header py-4">
    <div class="container">
        <div class="row no-row">
            <div class="col-md-12 no-col">
                <h2><i class="fas fa-tachometer-alt"></i>Dashboard</h2>
            </div>
        </div>
    </div>
</section>

<div class="menu py-4">
    <div class="container admin">
        <div class="row justify-content-center no-row">
            <div class="col-md-3 no-col">
                @include('layouts.sidenav')
            </div>
            <div class="col-md-9 no-col">
                <div class="card">
                    <div class="card-header admin__card-header">
                        WebSite Overview
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row no-row">
                                <div class="col-md-3">
                                    <div class="card h-100">
                                        <div class="card-body admin__card-body">
                                            <h5 class="card-title">User</h5>
                                            <h4><i class="text-primary fas fa-user"></i></h4>
                                            <h4>240</h4>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="card h-100">
                                        <div class="card-body admin__card-body">
                                            <h5 class="card-title">Downloadable Contents</h5>
                                            <h4><i class="text-success fas fa-download"></i></h4>
                                            <h4>50</h4>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="card h-100">
                                        <div class="card-body admin__card-body">
                                            <h5 class="card-title">News</h5>
                                            <h4><i class="text-info fas fa-newspaper"></i></h4>
                                            <h4>{{ $newsCount }}</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card h-100">
                                        <div class="card-body admin__card-body">
                                            <h5 class="card-title">Messages</h5>
                                            <h4><i class="text-danger fas fa-comments"></i></h4>
                                            <h4>{{ $messageCount }}</h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Row -2 --}}
            <div class="container my-4">
                <div class="row no-row">
                    <div class="col-md-6 no-col">
                        <div class="card">
                            <div class="card-header admin__card-header">
                                Messages <i class="fas fa-comments"></i>
                            </div>
                            <div class="card-body">
                                    <div id="accordion">
                                        @foreach($message as $msg)

                                            @if(!$msg -> status)
                                            <div class="card my-2 msg-card text-left">
                                              <div class="card-header msg-card-header" style="background-color:#dbdbdb !important;" id="headingOne">
                                                <h5 class="mb-0">
                                                <button class="btn btn-link msg-btn" data-toggle="collapse" data-target="#collapse{{ $msg -> id }}" aria-expanded="true" aria-controls="collapse{{ $msg -> id }}" id="msg{{ $msg -> id }}" >
                                                    <strong class="px-2"><span class="text-danger mr-1"><i class="fas fa-envelope"></i></span>{{ $msg -> name }}</strong><i class="fas fa-arrow-circle-down"></i>
                                                  </button>
                                                  <strong><p class="float-right mb-0 text-muted" style="font-size: 12px;">{{ $msg -> created_at->format('d/m/Y') }}</p></strong>
                                                </h5>
                                              </div>

                                            <div id="collapse{{ $msg -> id }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body text-left">
                                                    <strong><p>Message</p></strong>
                                                    {{ $msg -> content }}
                                                </div>
                                                <div class="card-footer" style="background-color:#ededed !important;">
                                                    <p>Email:{{ $msg -> email }}</p>
                                                <p>Phone:{{ $msg -> phone }}</p>
                                                </div>
                                              </div>
                                            </div>

                                            @else

                                            <div class="card my-2 text-left msg-card" style="background-color:#fff !important;" >
                                                    <div class="card-header msg-card-header" style="background-color:#fff !important;" id="headingOne">
                                                      <h5 class="mb-0">
                                                      <button class="btn btn-link msg-btn" data-toggle="collapse" data-target="#collapse{{ $msg -> id }}" aria-expanded="true" aria-controls="collapse{{ $msg -> id }}">
                                                          <span class="px-2"><span class="mr-1" style="color:#339989;"><i class="fas fa-envelope-open"></i></span><strong>{{ $msg -> name }}</strong></span><i class="fas fa-arrow-circle-down"></i>
                                                        </button>
                                                        <strong><p class="float-right mb-0 text-muted" style="font-size: 12px;">{{ $msg -> created_at->format('d/m/Y') }}</p></strong>
                                                      </h5>
                                                    </div>

                                                  <div id="collapse{{ $msg -> id }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                      <div class="card-body text-left" style="background-color:#fff !important;">
                                                         <strong><p>Message:</p></strong>
                                                          {{ $msg -> content }}
                                                      </div>
                                                      <div class="card-footer" style="background-color:#fff !important;">
                                                          <p><strong class="mr-1">Email:</strong><span id="copyEmail{{ $msg -> id }}">{{ $msg -> email }}</span>
                                                            <button data-clipboard-target="#copyEmail{{ $msg -> id }}" class="btn badge badge-c float-right copy-button">copy</button>
                                                        </p>
                                                      <p><strong class="mr-1">Phone:</strong><span id="copyPhone{{ $msg -> id }}">{{ $msg -> phone }}</span>
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
                           url: '{{url('/updateInbox')}}',
                           success:function(response){
                               console.log(response);
                           }
                       });
                    })
                    @endforeach



                });
            </script>
        @endsection
