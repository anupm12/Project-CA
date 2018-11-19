{{-- Facebook --}}
<div class="modal fade" id="facebookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Social Links</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Facebook</p>
            <form action="{{ route('admin.social.add',['id'=>'1']) }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="links"></label>
                        <input placeholder="Enter teh links" name="link" id="links" type="text" class="form-control admin__form-control">
                    </div>
                    <button type="submit" class="btn btn-custom btn-admin"><i class="fas fa-check-circle pr-2"></i>Go</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Instagram --}}
<div class="modal fade" id="instagramModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Social Links</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Instagram</p>
                <form action="{{ route('admin.social.add',['id'=>'2']) }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="links"></label>
                        <input placeholder="Enter the links" name="link" id="links" type="text" class="form-control admin__form-control">
                    </div>
                    <button type="submit" class="btn btn-custom btn-admin"><i class="fas fa-check-circle pr-2"></i>Go</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Google Plus --}}
<div class="modal fade" id="google-plusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Social Links</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Google Plus</p>
                <form action="{{ route('admin.social.add',['id'=>'3']) }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="links"></label>
                        <input placeholder="Enter the links" name="link" id="links" type="text" class="form-control admin__form-control">
                    </div>
                    <button type="submit" class="btn btn-custom btn-admin"><i class="fas fa-check-circle pr-2"></i>Go</button>
                </form>
            </div>
        </div>
    </div>
</div>


{{-- Linkedin --}}
<div class="modal fade" id="linkedinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Social Links</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Linkedin</p>
                <form action="{{ route('admin.social.add',['id'=>'4']) }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="links"></label>
                        <input placeholder="Enter the links" name="link" id="links" type="text" class="form-control admin__form-control">
                    </div>
                    <button type="submit" class="btn btn-custom btn-admin"><i class="fas fa-check-circle pr-2"></i>Go</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Twitter --}}
<div class="modal fade" id="twitterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Social Links</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Twitter</p>
                <form action="{{ route('admin.social.add',['id'=>'5']) }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="links"></label>
                        <input placeholder="Enter the links" name="link" id="links" type="text" class="form-control admin__form-control">
                    </div>
                    <button type="submit" class="btn btn-custom btn-admin"><i class="fas fa-check-circle pr-2"></i>Go</button>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Youtube --}}
<div class="modal fade" id="youtubeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Social Links</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Youtube</p>
                <form action="{{ route('admin.social.add',['id'=>'6']) }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="links"></label>
                        <input placeholder="Enter the links" name="link" id="links" type="text" class="form-control admin__form-control">
                    </div>
                    <button type="submit" class="btn btn-custom btn-admin"><i class="fas fa-check-circle pr-2"></i>Go</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Whatsapp --}}
<div class="modal fade" id="whatsappModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Social Links</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Whatsapp</p>
                <form action="{{ route('admin.social.add',['id'=>'7']) }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="links"></label>
                        <input placeholder="Enter the Phone Number" name="link" id="links" type="text" class="form-control admin__form-control">
                    </div>
                    <button type="submit" class="btn btn-custom btn-admin"><i class="fas fa-check-circle pr-2"></i>Go</button>
                </form>
            </div>
        </div>
    </div>
</div>
