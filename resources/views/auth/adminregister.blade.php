@extends('layouts.app')

@section('content')
<div class="container my-4 my-mb">
    <div class="row no-row justify-content-center">
        <div class="col-md-8 no-col box-border">
            <div class="card">
                <div class="card-header card-header-mb" style="border:0 !important; font-weight:600;">{{ __('Register') }}</div>

                <div class="card-body">


                    <form method="POST" action="{{ route('admin.register.store') }}" aria-label="{{ __('Register') }}">
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
                                <label for="secret" class="text-md-right label-custom"><i class="fas fa-circle dot pr-2"></i>{{ __('Secret Code') }}</label>
                            </div>

                            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text input-group-text-custom" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                      </div>

                                    <input id="secret" type="text" class="form-control input-group-custom {{ $errors->has('secret') ? ' is-invalid' : '' }}" name="Secret" required placeholder="Enter your secret code">

                                    @if ($errors->has('secret'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('secret') }}</strong>
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

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

