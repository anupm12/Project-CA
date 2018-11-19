@extends('layouts.app')

@section('content')
<div class="container my-4 my-mb">
    <div class="row no-row justify-content-center">
        <div class="col-md-8 no-col box-border">
            <div class="card">
                <div class="card-header card-header-mb" style="border:0 !important; font-weight:600;">{{ __('Register') }}</div>

                <div class="card-body">
                    @if(session()->get('error'))
                        <div class="alert alert-danger" role="alert" style="border-left:3px solid #ED4C67;text-align: left;color:#ED4C67 !important;">
                            <i class="fas fa-times-circle pr-2"></i>{!! session()->get('error') !!}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div style="display: flex;">
                            <label for="name" class="text-md-right label-custom"><i class="fas fa-circle dot pr-2"></i>{{ __('Name') }}</label><br/>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text input-group-text-custom" id="basic-addon1"><i class="fas fa-user"></i></span>
                              </div>

                                <input id="name" type="text" class="form-control input-group-custom {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Enter your name">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div style="display:flex;">
                            <label for="email" class="text-md-right label-custom"><i class="fas fa-circle dot pr-2"></i>{{ __('E-Mail Address') }}</label>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text input-group-text-custom" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                              </div>

                                <input id="email" type="email" class="form-control input-group-custom {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Enter your password email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div style="display:flex;">
                            <label for="password" class="text-md-right label-custom"><i class="fas fa-circle dot pr-2"></i>{{ __('Password') }}</label>
                        </div>

                        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text input-group-text-custom" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                  </div>

                                <input id="password" type="password" class="form-control input-group-custom {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Enter your password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div style="display:flex;">
                                <label for="password-confirm" class="text-md-right label-custom"><i class="fas fa-circle dot pr-2"></i>{{ __('Confirm Password') }}</label>
                        </div>

                        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text input-group-text-custom" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                  </div>
                                <input id="password-confirm" type="password" class="form-control input-group-custom" name="password_confirmation" required placeholder="Enter your password again">

                        </div>

                        <div class="custom-center">

                                <button type="submit" class="btn btn-custom" style="font-weight:500; background:#1e90ff;">
                                    {{ __('Register') }}
                                </button>

                        </div>
                    </form>
                    <div class="oauth py-4">
                        <hr />
                        <div class="two"><span>OR</span></div>

                        <div class="logo py-3 px-4">
                        <a href="{{ route('login.auth',['provider'=>'google']) }}">
                        <img src="Images/login/google.svg" alt="google" style="height: 2rem;" class="pr-3 ">
                            Google
                        </a>
                        </div>

                        <div class="logo px-4">
                        <a href="{{ route('login.auth',['provider'=>'facebook']) }}" style="font-weight:500;">
                            <img src="Images/login/facebook.svg" alt="google" style="height: 2rem;" class="pr-3 ">
                            Facebook
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-script')
<script>
        window.fbAsyncInit = function() {
          FB.init({
            appId      : '{1770683679724204}',
            cookie     : true,
            xfbml      : true,
            version    : '{3.2}'
          });

          FB.AppEvents.logPageView();

        };

        (function(d, s, id){
           var js, fjs = d.getElementsByTagName(s)[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement(s); js.id = id;
           js.src = "https://connect.facebook.net/en_US/sdk.js";
           fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
      </script>
@endsection
