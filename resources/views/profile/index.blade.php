@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4 text-primary">User Profile</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"></li>
    </ol>


    <div class="row">
        <!-- Modify Start -->

<div class="col-md-10 mb-3" >
            <div class="card">
                    <div class="card-header bg-custom_side text-white">
                    <h6 class="text-uppercase text-sm">User Information</h6>
                    </div>
                    <div class="card-body">

                        <div class="row">
                        <div class="col-lg-4 col-md-4"></div>
                        <div class="col-lg-4 col-md-4 mb-3">
                        <div class="profile-pic-wrapper">
                            <div class="pic-holder text-center">
                                <img src="/uploads/avatars/{{auth::user()->avatar;}}" style="width:150px; height:150px; border-radius:50%; margin-right:25px;" >


                                <form  enctype="multipart/form-data" action="/profile/avatar" method="POST">
                                    <label>Update Profile Image</label>
                                        <input class="mb-3" type="file" name="image">
                                        @csrf
                                        <br/>
                                        <input type="submit" name="upload" value="Upload" class="pull-center btn btm-sm btn-primary w-50">
                                </form>

                            </div>
                        </div>
{{-- <div class="text-center">
<div class="mb-2">
<i class="fa fa-camera fa-2x"></i>
</div>
<div class="text-uppercase">
Update <br /> Profile Photo
</div>
</div> --}}
</label>
                        </div>
                        <div class="col-lg-4 col-md-4"></div>
                        <div class="row text-start">
<div class="col-md-6 form-group mb-3">
<div class="form-floating">

    <input readonly class="form-control" type="text" id ="inputFirstname" placeholder="First Name" value="{{Auth::user()->firstname}}" >
    <label for="inputFirstname">First Name</label>
</div>
</div>
<div class="col-md-6 form-group mb-3">
<div class="form-floating">
    <input readonly class="form-control" id="inputCompany" type="text" placeholder="Company" value="{{Auth::user()->company}}" >
    <label for="inputCompany" class="form-control-label">Company</label>
</div>
</div>
<div class="col-md-6 form-group mb-3">
<div class="form-floating">

    <input readonly class="form-control" type="text" id="inputLastname" placeholder="Last Name" value="{{Auth::user()->lastname}}" >
    <label for="inputLastname" class="form-control-label">Last Name</label>
</div>
</div>
<div class="col-md-6 form-group mb-3">
    <div class="form-floating">

    <input readonly class="form-control" type="text" id="inputStreetAddress" placeholder="Street Address"  value="{{Auth::user()->street_address}}" >
    <label for="inputStreetAddress" class="form-control-label">Street Address</label>
    </div>
</div>
<div class="col-md-6 form-group mb-3">
    <div class="form-floating">
        <input readonly class="form-control" type="text" id ="inputContactNo" placeholder="Contact No." value="{{Auth::user()->contact_no}}">
        <label for="inputContactNo" class="form-control-label">Contact No.</label>
    </div>
</div>
<div class="col-md-6 form-group mb-3">
    <div class="form-floating">

        <input readonly class="form-control" type="email" id="inputEmail" placeholder="Email Address" value="{{Auth::user()->email}}" >
        <label for="inputEmail" class="form-control-label">Email Address</label>
    </div>
</div>
<div class="col-md-6 form-group mb-3">
    <div class="form-floating">
        <input readonly class="form-control" type="text" id="inputCity" placeholder="City" value="{{Auth::user()->city}}" >
        <label for="inputCity" class="form-control-label">City</label>
    </div>
</div>
<div class="col-md-6 form-group mb-3">
    <div class="form-floating">

        <input readonly class="form-control" type="text" id="inputCountry" placeholder="Country" value="{{Auth::user()->country}}" >
        <label for="inputCountry" class="form-control-label">Country</label>
    </div>
</div>
<div class="col-md-6 form-group mb-3">
<div class="form-floating">
        <input readonly class="form-control" type="text" id="inputUsername" placeholder="Username" value="{{Auth::user()->username}}"  >
        <label for="inputUsername" class="form-control-label">Username</label>
    </div>
</div>
<div class="col-md-6 form-group mb-3">
    <div class="form-floating">

        <input readonly class="form-control" type="text" id="inputZipCode" placeholder="Zip Code" value="{{Auth::user()->zipcode}}" >
        <label for="inputZipCode" class="form-control-label">Zip Code</label>
    </div>
</div>

<div class="col-md-12 form-group mb-3">
    <div class="row">
        <div class="col-6 col-sm col-md-6 text-first">
        <a class="btn  btn-success text-white" href="profile/change-password">Change Password</a>
        </div>
        <div class="col-6 col-sm col-md-6 col-md-6 text-end">
        <a class="btn btn-primary text-white" href="profile/edit">Update Profile</a>
        </div>
    </div>


</div>

</div>

                        </div>
                    </div>

            </div>
</div>



        <!-- Modify End -->
    </div>

</div>

@endsection
