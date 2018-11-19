@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-8 no-col box-border">
            <div class="card">
                <div class="card-header dark-color-text" style="border:0 !important; font-weight:600;">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    <div class="bg custom-center">
                        <img src="{{ asset('Images/SVG/please.svg') }}">
                    </div>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert" style="border-left:3px solid #2ecc71">
                            <i class="fas fa-check pr-2"></i>
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <p class="para gery-color-text">{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                    <p class="para gery-color-text">{{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}" style="color:#1e90ff; font-weight:500;">{{ __('click here to request another') }}</a></p>.

                    <img src="{{ asset('Images/Logo/logoBlack.svg') }}" alt="" style="height:2.5rem;" class="py-2">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
