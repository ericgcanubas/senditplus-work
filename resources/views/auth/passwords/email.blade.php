@extends('layouts.new-app')
<div class="container " style="margin-left:0px;z-index:999999;">
    <div class="row" style="margin-left:0px;">
        <div class="xs-hidden" style="float:left;margin-top:50px;margin-left:0px;">
            <a href="/" class="btn btn-md btn-warning text-white title-font" style="background-color:royalblue;float:left; margin-left:-20px;" > <i class="fa fa-arrow-left"></i>  BACK TO SIGN-IN </a>
        </div>
    </div>
</div>
@section('content')
<div class="container" >
    <div class="row justify-content-center" >
        <div class="col-md-5" style="min-height: 100vh">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
