@extends('layouts.new-app')

@section('content')'
<div class="container " style="margin-left:0px;z-index:999999;">
    <div class="row" style="margin-left:0px;">
        <div class="xs-hidden" style="float:left;margin-top:50px;margin-left:0px;">
            <a href="/" class="btn btn-md btn-warning text-white title-font" style="background-color:royalblue;float:left; margin-left:-20px;" > <i class="fa fa-arrow-left"></i>  BACK TO SIGN-IN </a>
        </div>
    </div>
</div>

<style>
    .disabled {
    pointer-events:none; //This makes it not clickable
    opacity:0.6;         //This grays it out to look disabled
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Register') }}</div> --}}

                <div class="card-body">

                                            {{--  Start Form --}}

                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <ul class="nav nav-pills mb-3 nav-fill" id="pills-tab" role="tablist">
                            <li class="nav-item bg-secondary disabled" role="presentation" >
                                <button id="previous_click" class="nav-link active text-white" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Basic Info</button>
                            </li>
                            <li class="nav-item bg-secondary disabled" role="presentation">
                                <button id="next_click" class="nav-link text-white" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Account Info</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row text-start">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstname" class="col-md-4 col-form-label text-md-start">{{ __('Firstname') }}</label>

                                        <div class="col-md-12">
                                            <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                            @error('firstname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="lastname" class="col-md-4 col-form-label text-md-start">{{ __('Lastname') }}</label>

                                        <div class="col-md-12">
                                            <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                            @error('lastname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="company" class="col-md-4 col-form-label text-md-start">{{ __('Company') }}</label>

                                        <div class="col-md-12">
                                            <input id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ old('company') }}" required autocomplete="company" autofocus>

                                            @error('company')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="street_address" class="col-md-4 col-form-label text-md-start">{{ __('Address') }}</label>

                                        <div class="col-md-12">
                                            <input id="street_address" type="text" class="form-control @error('street_address') is-invalid @enderror" name="street_address" value="{{ old('street_address') }}" required autocomplete="street_address" autofocus>

                                            @error('street_address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="contact_no" class="col-md-4 col-form-label text-md-start">{{ __('Contact No.') }}</label>

                                        <div class="col-md-12">
                                            <input id="contact_no" type="text" class="form-control @error('contact_no') is-invalid @enderror" name="contact_no" value="{{ old('street_address') }}" required autocomplete="contact_no" autofocus>

                                            @error('contact_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="city" class="col-md-4 col-form-label text-md-start">{{ __('City') }}</label>

                                        <div class="col-md-12">
                                            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>

                                            @error('city')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-6 mb-3">
                                        <label for="country" class="col-md-4 col-form-label text-md-start">{{ __('Country') }}</label>

                                        <div class="col-md-12">
                                            <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus>

                                            @error('country')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-6 mb-3">
                                        <label for="zipcode" class="col-md-4 col-form-label text-md-start">{{ __('Zip Code') }}</label>

                                        <div class="col-md-12">
                                            <input id="zipcode" type="number" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" value="{{ old('zipcode') }}" required autocomplete="zipcode" autofocus>

                                            @error('zipcode')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-start">{{ __('Email') }}</label>

                                        <div class="col-md-12">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3 text-end">
                                        <button   onclick="btnNext()" class="btn btn-primary ">Next Step</button>
                                    </div>
                                </div>
                            </div>



                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="row text-start">
                                <div class="col-md-6 mb-3">
                                    <label for="zipcode" class="col-md-4 col-form-label text-md-start">{{ __('Subscription Type') }}</label>
                                    <div class="col-md-12">
                                        {{-- <input id="subscription_type" type="number" class="form-control @error('subscription_type') is-invalid @enderror" name="subscription_type" value="{{ old('subscription_type') }}" required autocomplete="subscription_type" autofocus> --}}

                                        <select id="subscription_type" name="subscription_type" class="form-select @error('subscription_type') is-invalid @enderror" aria-label="Default select example">
                                            <option selected value="0">--select type--</option>
                                            <option value="1">Postpaid</option>
                                            <option value="2">Prepaid</option>
                                        </select>

                                        @error('subscription_type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label for="username" class="col-md-4 col-form-label text-md-start">{{ __('Username') }}</label>

                                    <div class="col-md-12">
                                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-start">{{ __('Password') }}</label>
                                    <div class="col-md-12">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-start">{{ __('Confirm Password') }}</label>
                                    <div class="col-md-12">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-0">
                                    <div class="row">
                                    <div class="col-md-6">
                                            <button class="btn btn-secondary btnPreview" onclick="btnPrevious()"> Previous </button>

                                    </div>
                                    <div class="col-md-6 text-end ">
                                        <a href="#" onclick="btnSubmit(event)" class="btn btn-success">Finish</a>

                                        {{-- <button onclick="btnSubmit()" class="btn btn-success">
                                          submit   {{ __('Register') }}
                                        </button> --}}

                                        <button id="save" type="submit" class="d-none btn btn-primary">

                                        </button>

                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>







                    </form>



                            {{--  end of form --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>

    function btnPrevious() {
        var l = document.getElementById('previous_click');
    l.click();
    }


    function btnNext() {
        var n = document.getElementById('next_click');
            var lastname = document.getElementById('lastname');
            var firstname = document.getElementById('firstname');
            var company = document.getElementById('company');
            var address = document.getElementById('street_address');
            var contact_no = document.getElementById('contact_no');
            var city = document.getElementById('city');
            var country = document.getElementById('country');
            var zipcode = document.getElementById('zipcode');
            var email = document.getElementById('email');

            if (lastname.value  == '')
            {

            }
            else if(firstname.value == '')
            {

            }
            else if(company.value == '')
            {

            }
            else if(address.value == '')
            {

            }
            else if(contact_no.value =='')
            {

            }
            else if(city.value == '')
            {

            }
            else if(country.value =='')
            {

            }
            else if(zipcode.value =='')
            {

            }
            else if(email.value =='')
            {

            }
            else{
                n.click();
            }

    }




 </script>

<script type="text/javascript">

function btnSubmit(e) {

       var s = document.getElementById('save');

            var sb = document.getElementById('subscription_type');
            var username = document.getElementById('username');
            var password = document.getElementById('password');
            var password_confirm = document.getElementById('password-confirm');


            if (sb.value == 0){

                alert('please select subscription type');
            }
            else if(username.value == ''){

                alert('please enter username');

            }
            else if(password.value == ''){
                alert('please enter password');
            }
            else if(password_confirm.value  == '' ){
                alert('please enter password confirm');
            }
            else if(password.value != password_confirm.value){
                    alert('password not match');
            }
            else{
             s.click();
            }


    }
</script>
