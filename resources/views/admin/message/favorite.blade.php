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
                            <form action="{{ route('admin.message.deleteAll') }}" method="post">
                                        {{ csrf_field() }}
                            <table id="example" class="table display">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Favorite</th>
                                        <th>Message</th>
                                        <th><button type="submit" class="btn btn-sm btn-danger"><i class=" fas fa-trash-alt mr-1"></i>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach($message as $msg)
                                    <tr>
                                        <td>{{ $no }}

                                        </td>
                                        <td>
                                                <div class="pretty p-icon p-plain p-round p-jelly">
                                                        <input id="favorite{{ $msg -> id }}" value="{{ $msg -> id }}" type="checkbox" {{ $msg -> favorite? 'checked' : 'unchecked' }} />
                                                        <div class="state p-warning-o">
                                                                <i class="icon fas fa-star"></i>
                                                            <label> </label>
                                                        </div>
                                                    </div>
                                        </td>
                                        <td>
                                    <div class="card-body">
                                            <div id="accordion">

                                                @if($msg -> favorite)
                                                    @if(!$msg -> status)
                                                    <div class="card my-2  text-left">
                                                      <div class="card-header" style="background-color:#dbdbdb !important;" id="headingOne">
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

                                                    <div class="card my-2 text-left" style="background-color:#fff !important;" >
                                                            <div class="card-header " style="background-color:#fff !important;" id="headingOne">
                                                              <h5 class="mb-0">
                                                              <a class="btn btn-link msg-btn" data-toggle="collapse" data-target="#collapse{{ $msg -> id }}" aria-expanded="true" aria-controls="collapse{{ $msg -> id }}">
                                                                  <span class="px-2"><span class="mr-1" style="color:#339989;"><i class="fas fa-envelope-open"></i></span><strong>{{ $msg -> name }}</strong></span><i class="fas fa-arrow-circle-down"></i>
                                                                </a>

                                                                <span class="float-right ml-2 text-info"><a href="" data-toggle="modal" data-id="{{ $msg -> id }}" data-target="#openModal"><i  class="fas fa-desktop"></i></a></span>
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
                                                                      <a data-clipboard-target="#copyEmail{{ $msg -> id }}" class="btn badge badge-c float-right copy-button">copy</a>
                                                                  </p>
                                                                <p><strong class="mr-1">Phone:</strong><span id="copyPhone{{ $msg -> id }}">{{ $msg -> phone }}</span>
                                                                  <a data-clipboard-target="#copyPhone{{ $msg -> id }}" class="btn badge badge-c float-right copy-button">copy</a>
                                                                  </p>
                                                                </div>
                                                            </div>
                                                          </div>
                                                    @endif
                                                    @endif
                                                  </div>
                                    </div>
                                </td>
                                <td>
                                        <div class="pretty p-icon p-round p-smooth p-plain">
                                                <input type="checkbox" name="deleteCheck[]" value="{{ $msg -> id }}" />
                                                <div class="state p-warning-o">
                                                        <i class="text-danger icon fas fa-trash-alt"></i>
                                                    <label> </label>
                                                </div>
                                            </div>
                                </td>
                                    </tr>
                                    <?php $no++;?>
                                    @endforeach
                                </tbody>
                            </table>
                            </form>

                        </div>
                    </div>
                </div>

                {{-- Modal --}}
                <div class="modal fade" id="openModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <form action="  {{ route('admin.news.add')  }} " method="post" >

        {{ csrf_field() }}
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add News</h5>

                </div>
                <div class="modal-body">





                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-custom btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-custom btn-primary">Add</button>
                </div>
            </div>
        </div>
    </form>
    </div>


                @endsection

                @section('page-script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
            <script>


                $(document).ready(function(){
                    $('#example').DataTable();
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
                    });


                    $("#favorite{{ $msg -> id }}").click(function(){
                        var val =$("#favorite{{ $msg -> id }}").is(':checked');
                        if (val){
                            console.log('checked')
                            $.ajax({
                            type:'get',
                            data:'favid='+{{ $msg -> id }},
                            url: '{{url('/favorite')}}',
                            success:function(response){
                               console.log(response);
                           }
                        })
                        }
                        else {
                            console.log('unchecked')
                            $.ajax({
                            type:'get',
                            data:'favid='+{{ $msg -> id }},
                            url: '{{url('/unfavorite')}}',
                            success:function(response){
                               console.log(response);
                           }
                        })
                        }
                    });

                    // $("#favorite{{ $msg -> id }}").click(function(){
                    //       $("#favorite{{ $msg -> id }}").attr('checked',function(){

                    //     })
                    // });



                    @endforeach

                     $('#openModal').on('show.bs.modal', function (event) {

                    var button = $(event.relatedTarget)
                    var id = button.data('id')


    console.log(id);
})

                });
            </script>
        @endsection
