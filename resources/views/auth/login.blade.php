@extends('layouts.new-app')

@section('content')
<div class="container">
    <div class="row justify-content-center " style="min-height: 100vh">
            <div class=" col-md-7 col-lg-7 text-center my-auto">
                <h3 class="text-white txt_shadow">WELCOME TO</h3>
                <h1  class="text-white title_font intro-title  txt_shadow"   ><i class="fa fa-paper-plane" aria-hidden="true"></i> sendiT+</h1>
                <h4 class="text-white title_font txt_shadow">Automated Sending Machine.</h4>
                <br/>
                <h5 class="d-none d-sm-block text-white title_font txt_shadow">Achieve better connection in sending message or email and assist you in a more satisfying expectation. </h5>

                <a class="d-none d-sm-block btn btn-primary text-white btn-lg  rounded-pill w-100  txt_shadow shadow-lg" style="" href="register">SUBSCRIBE NOW! </a>

            </div>

      <div class="d-none d-sm-block col-md-1 col-lg-1 text-center my-auto"  style="background-color:ffff;" >

      </div>
        <div class="col-md-4 my-auto">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            {{-- <label for="email" class="col-md-12 col-form-label text-md-start">{{ __('Email Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}


                                <label for="username" class="col-md-12 col-form-label text-md-start">{{ __('Username') }}</label>

                                <div class="col-md-12">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ">
                            <label for="password" class="col-md-12 col-form-label text-md-start">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12 offset-md-1">
                                <div class="form-check text-start">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0 text-center">
                            <div class="col-md-12 text-md-center">

                                <button type="submit" class="btn btn-primary rounded-pill w-100 ">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
