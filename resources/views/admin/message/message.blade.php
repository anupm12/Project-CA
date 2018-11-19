@extends('layouts.adminapp')



@section('content')
@include('sweet::alert')
<div id="content-wrapper">

    <div class="container-fluid">
            <ol class="breadcrumb admin-header">
                <li class="breadcrumb-item">
                    <a href="#"> <i class="fas fa-fw fa-comments"></i>Messages</a>
                </li>
                <li class="breadcrumb-item active">Overview</li>
            </ol>

            <div class="card box-border" style="border:initial;">
                    <div class="card-header admin__card-header">
                        Messages
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.message.deleteAll') }}" method="post">
                                    {{ csrf_field() }}
                        <div class="table-responsive">
                        <table id="example" class="table display">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Favorite</th>
                                    <th>Message</th>
                                    <th><a type="submit" class="text-danger" style="-webkit-appearance: initial;"><i class=" fas fa-trash-alt mr-1"></i>Delete</th>
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


                                                @if(!$msg -> status)
                                                <div class="card my-2  text-left" style="border:initial;">
                                                  <div class="card-header" style="background-color:#e5ebf7 !important; border:initial;" id="headingOne">
                                                    <h5 class="mb-0">
                                                    <a class="btn btn-link msg-btn" data-toggle="collapse" data-target="#collapse{{ $msg -> id }}" aria-expanded="true" aria-controls="collapse{{ $msg -> id }}" id="msg{{ $msg -> id }}" >
                                                        <strong class="px-2"><span style="color:#f3628d;" class="mr-1"><i class="fas fa-envelope"></i></span>{{ $msg -> name }}</strong><i class="fas fa-arrow-circle-down"></i>
                                                    </a>
                                                      <strong><p class="float-right mb-0 text-muted" style="font-size: 12px;">{{ $msg -> created_at->format('d/m/Y') }}</p></strong>
                                                    </h5>
                                                  </div>

                                                <div id="collapse{{ $msg -> id }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body text-left" style="background-color:#e5ebf7 !important;" >
                                                        <strong><p>Message</p></strong>
                                                        {{ $msg -> content }}
                                                    </div>
                                                    <div class="card-footer" style="background-color:#d8e1f3 !important;">
                                                        <p><strong class="mr-1">Email:</strong><span id="copyEmail{{ $msg -> id }}">{{ $msg -> email }}</span>
                                                            <button data-clipboard-target="#copyEmail{{ $msg -> id }}" class="btn badge badge-c float-right copy-button">copy</button>
                                                        </p>
                                                      <p><strong class="mr-1">Phone:</strong><span id="copyPhone{{ $msg -> id }}">{{ $msg -> phone }}</span>
                                                        <button data-clipboard-target="#copyPhone{{ $msg -> id }}" class="btn badge badge-c float-right copy-button">copy</button>
                                                        </p>
                                                    </div>
                                                  </div>
                                                </div>

                                                @else

                                                <div class="card my-2 text-left" style="background-color:#edf2fa !important; border:initial;" >
                                                        <div class="card-header " style="background-color:#edf2fa !important; border:initial;" id="headingOne">
                                                          <h5 class="mb-0">
                                                          <a class="btn btn-link msg-btn" data-toggle="collapse" data-target="#collapse{{ $msg -> id }}" aria-expanded="true" aria-controls="collapse{{ $msg -> id }}">
                                                              <span class="px-2"><span class="mr-1" style="color:#5c8df6;"><i class="fas fa-envelope-open"></i></span><span style="text-transform: capitalize;">{{ $msg -> name }}</span></span><i class="fas fa-arrow-circle-down"></i>
                                                            </a>


                                                            <strong><p class="float-right mb-0 text-muted" style="font-size: 12px;">{{ $msg -> created_at->format('d/m/Y') }}</p></strong>
                                                          </h5>
                                                        </div>

                                                      <div id="collapse{{ $msg -> id }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                          <div class="card-body text-left" style="background-color:#edf2fa !important;">
                                                             <strong><p>Message:</p></strong>
                                                              {{ $msg -> content }}
                                                          </div>
                                                          <div class="card-footer" style="background-color:#e1e8f6 !important;">
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
                        </div>
                        </form>

                    </div>
                </div>

    </div>



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
                           url: '{{url('admin/updateInbox')}}',
                           success:function(response){
                               console.log(response);
                           }
                       });
                    });


                    $("#favorite{{ $msg -> id }}").click(function(){
                        var val =$("#favorite{{ $msg -> id }}").is(':checked');
                        if (val){

                            $.ajax({
                            type:'get',
                            data:'favid='+{{ $msg -> id }},
                            url: '{{url('admin/favorite')}}',
                            success:function(response){
                               console.log(response);
                           }
                        })
                        }
                        else {

                            $.ajax({
                            type:'get',
                            data:'favid='+{{ $msg -> id }},
                            url: '{{url('admin/unfavorite')}}',
                            success:function(response){
                               console.log(response);
                           }
                        })
                        }
                    });





                    @endforeach


})

                });
            </script>
        @endsection
