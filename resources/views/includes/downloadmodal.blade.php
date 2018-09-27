<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Edit</h5>

        </div>
        <div class="modal-body">
                <form action="">
                        <div class="form-group">
                            <input placeholder="Enter the Heading" type="text" class="form-control admin__form-control">
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

                        <button type="submit" class="btn btn-primary btn-custom">Submit</button>
                    </form>
        </div>


        <div class="modal-footer">
            <button type="button" class="btn btn-custom btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-custom btn-primary">Edit Hero Text</button>
        </div>
    </div>
</div>
</div>


{{-- Delete --}}
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <h4>Are You Sure You Want to Delete 🙁</h4>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="#" class="btn btn-danger">Confirm Delete</a>
        </div>
    </div>
</div>
</div>


<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Add And Edit Social Links</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Heading</li>
            <li class="list-group -item"><img src="{{ asset('Images/Help/Hero/heading.png') }}" alt="" ></li>
            <li class="list-group-item">Hightlighted Text</li>
            <li class="list-group -item"><img src="{{ asset('Images/Help/Hero/highlight.png') }}" alt="" ></li>
            <li class="list-group-item">SubHeading</li>
            <li class="list-group -item"><img src="{{ asset('Images/Help/Hero/subHeading.png') }}" alt="" ></li>

          </ul>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </div>
  </div>
</div>
</div>
