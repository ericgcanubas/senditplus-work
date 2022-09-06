@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4 text-primary">Update Profile</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Update</li>
    </ol>


    <div class="row">
        <!-- Modify Start -->

<div class="col-md-10 mb-3" >
            <div class="card">
                    <div class="card-header bg-custom_side text-white">
                    <h6 class="text-uppercase text-sm">User Information</h6>
                    </div>
                    <div class="card-body">

     {!! Form::open(['url'=>['/profile/update/'.Auth::user()->id], 'method'=>'POST']) !!}

    <div class="row text-start">
        <div class="col-md-6 form-group mb-3">
            <div class="form-floating">

                {!! Form::text('firstname',old('firstname'). Auth::user()->firstname,['class'=>'form-control','placeholder'=>'First Name','required','id'=>'inputFirstname']) !!}
                <label for="inputFirstname">First Name</label>
            </div>
        </div>
        <div class="col-md-6 form-group mb-3">
            <div class="form-floating">

                {!! Form::text('company',old('company'). Auth::user()->company,['class'=>'form-control','placeholder'=>'company','required','id'=>'inputCompany']) !!}
                <label for="inputCompany" class="form-control-label">Company</label>
            </div>
        </div>
        <div class="col-md-6 form-group mb-3">
            <div class="form-floating">

                {!! Form::text('lastname',old('lastname'). Auth::user()->lastname,['class'=>'form-control','placeholder'=>'lastame','required','id'=>'inputLastname']) !!}
                <label for="inputLastname" class="form-control-label">Last Name</label>
            </div>
        </div>
        <div class="col-md-6 form-group mb-3">
            <div class="form-floating">

                {!! Form::text('street_address',old('street_address'). Auth::user()->street_address,['class'=>'form-control','placeholder'=>'Street Address','required','id'=>'inputStreetAddress']) !!}
                <label for="inputStreetAddress" class="form-control-label">Street Address</label>
            </div>
        </div>
        <div class="col-md-6 form-group mb-3">
            <div class="form-floating">
                {!! Form::text('contact_no',old('contact_no'). Auth::user()->contact_no,['class'=>'form-control','placeholder'=>'Contact No.','required','id'=>'inputContactNo']) !!}
                <label for="inputContactNo" class="form-control-label">Contact No.</label>
            </div>
        </div>
        <div class="col-md-6 form-group mb-3">
            <div class="form-floating">

                {!! Form::text('email',old('email'). Auth::user()->email,['class'=>'form-control','placeholder'=>'Email Address','required','id'=>'inputEmail','readonly']) !!}
                <label for="inputEmail" class="form-control-label">Email Address</label>
            </div>
        </div>
        <div class="col-md-6 form-group mb-3">
            <div class="form-floating">

                {!! Form::text('city',old('city'). Auth::user()->city,['class'=>'form-control','placeholder'=>'City','required','id'=>'inputCity']) !!}
                <label for="inputCity" class="form-control-label">City</label>
            </div>
        </div>
        <div class="col-md-6 form-group mb-3">
            <div class="form-floating">

                {!! Form::text('country',old('country'). Auth::user()->country,['class'=>'form-control','placeholder'=>'Country','required','id'=>'inputCountry']) !!}
                <label for="inputCountry" class="form-control-label">Country</label>
            </div>
        </div>
        {{-- <div class="col-md-6 form-group mb-3">
            <div class="form-floating">
                <input readonly class="form-control" type="text" id="inputUsername" placeholder="Username" value="{{Auth::user()->username}}"  >
                <label for="inputUsername" class="form-control-label">Username</label>
            </div>
        </div> --}}
        <div class="col-md-6 form-group mb-3">
            <div class="form-floating">
                {!! Form::text('zipcode',old('zipcode'). Auth::user()->zipcode,['class'=>'form-control','placeholder'=>'Zip Code','required','id'=>'inputZipCode']) !!}
                <label for="inputZipCode" class="form-control-label">Zip Code</label>
            </div>
        </div>
        <div class="col-md-12 form-group mb-3">
            <div class="row">
                <div class="col-6 col-sm col-md-6 text-first">
                    <a class="btn  btn-secondary text-white" href="/profile">Cancel</a>
                </div>
                <div class="col-6 col-sm col-md-6 col-md-6 text-end">
                    <button type="submit" class="btn btn-primary text-white">Update</button>
                </div>
            </div>
        </div>

</div>

{!! Form::close() !!}
                        </div>



            </div>
</div>



        <!-- Modify End -->
    </div>

</div>

@endsection
