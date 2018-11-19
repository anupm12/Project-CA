 {{-- Add Modal --}}
 <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
 aria-hidden="true">
 <form action="  {{ route('admin.download.add')  }} " method="post" enctype="multipart/form-data">

     {{ csrf_field() }}
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLongTitle">Add File</h5>

             </div>
             <div class="modal-body">


                            <div class="form-group">
                                <input name="heading" placeholder="Enter the Heading" type="text" class="form-control admin__form-control">
                            </div>

                            <div class="form-group">
                                    <textarea name="content" placeholder="Enter the Details" type="text" class="form-control admin__form-control"></textarea>
                            </div>

                            <div class="form-group">
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text admin__upload-button" id="inputGroupFileAddon01">Upload</span>
                                            </div>

                                            <div class="custom-file">
                                              <input name="filePath" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                              <label class="custom-file-label admin__upload-lable" for="inputGroupFile01">Choose file</label>
                                            </div>
                                          </div>
                            </div>


                        </form>


             </div>


             <div class="modal-footer">
                 <button type="button" class="btn btn-custom btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle pr-2"></i>Close</button>
                 <button type="submit" class="btn btn-custom btn-admin"><i class="fas fa-check-circle pr-2"></i>Submit</button>
             </div>
         </div>
     </div>
 </form>
 </div>

{{-- Edit Modal --}}

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Edit</h5>

        </div>
        <div class="modal-body">
                <form action="{{ route("admin.download.edit") }}" method="post" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" id="downloadid" value="">
                        <div class="form-group">
                                <input name="heading" value="" id="editheading" placeholder="Enter the Heading" type="text" class="form-control admin__form-control">
                            </div>

                            <div class="form-group">
                                    <textarea name="content" value="" id="editcontent" placeholder="Enter the Details" type="text" class="form-control admin__form-control"></textarea>
                            </div>

                        <div class="form-group">
                                <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text admin__upload-button" id="inputGroupFileAddon01">Upload</span>
                                        </div>

                                        <div class="custom-file">
                                          <input name="filePath" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                          <label class="custom-file-label admin__upload-lable" for="inputGroupFile01">Choose file</label>
                                        </div>
                                      </div>
                        </div>



        </div>


        <div class="modal-footer">
            <button type="button" class="btn btn-custom btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle pr-2"></i>Close</button>
            <button type="submit" class="btn btn-custom btn-primary"><i class="fas fa-sync pr-2"></i>Update</button>
        </div>
    </form>
    </div>
</div>
</div>

<?php $id = 0; ?>
{{-- Delete --}}
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <form action="  {{ route('admin.download.delete')  }} " method="POST" >
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                    <input type="hidden" name="_method"  value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" id="deleteid" value="">
                <h4>Are You Sure You Want to Delete this 🙁</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-custom" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger btn-custom">Confirm Delete</textarea>
            </div>
        </div>
    </div>
</div>



@section('page-script')



<script>
$(document).ready(function(){

$('#editModal').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget)
    var id = button.data('id')
    var heading = button.data('head')
    var content = button.data('content')


    console.log(id);
    var modal = $(this)
    modal.find('.modal-body #downloadid').val(id)
    modal.find('.modal-body #editheading').val(heading)
    modal.find('.modal-body #editcontent').val(content)


    });


 $('#deleteModal').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget)
                    var deleteid = button.data('deleteid')
                    console.log(deleteid)
                    <?php $id = "<script>document.write(deleteid)</script>" ?>
                    var modal = $(this)

                    modal.find('.modal-body #deleteid').val(deleteid)
                });

@foreach ($download as $data)
  $("#publish{{ $data -> id }}").click(function(){
                        var val =$("#publish{{ $data -> id }}").is(':checked');
                        if (val){
                            // console.log('checked')
                            $.ajax({
                                headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
                            type:'get',
                            data:'pubid='+{{ $data -> id }},
                            url: '{{url('/admin/publish')}}'
                        })
                        }
                        else {
                            // console.log('unchecked')
                            $.ajax({
                                headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
                            type:'get',
                            data:'pubid='+{{ $data -> id }},
                            url: '{{url('/admin/unpublish')}}'
                        })
                        }
                    });

         @endforeach
});
</script>

@endsection
