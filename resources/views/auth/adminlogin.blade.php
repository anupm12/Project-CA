@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-8 no-col box-border">
            <div class="card">
                <div class="card-header" style="border:0 !important; font-weight:600;">{{ __('Admin Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.login.into') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div style="display:flex;">
                            <label for="email" class="text-md-right label-custom"><i class="fas fa-circle dot pr-2"></i>{{ __('E-Mail Address') }}</label>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text input-group-text-custom" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                              </div>
                                <input id="email" type="email" class="form-control input-group-custom  {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter your email address">

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

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit"  class="btn btn-custom" style="font-weight:500; background:#1e90ff;">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" style="font-weight:500;color:#1e90ff;" href="{{ route('admin.password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>

                        <div class="form-group row pl-5 py-2">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
