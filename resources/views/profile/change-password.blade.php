@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4 text-primary">Change Password</h1>
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

                        <div class="panel-body">
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if($errors)
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">{{ $error }}</div>
                                @endforeach
                            @endif
                            <form class="form-horizontal" method="POST" action="{{ route('changePasswordPost') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                    <label for="new-password" class="col-md-4 control-label">Current Password</label>

                                    <div class="col-md-6 mb-3">
                                        <input id="current-password" type="password" class="form-control" name="current-password" required>

                                        @if ($errors->has('current-password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('current-password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                    <label for="new-password" class="col-md-4 control-label">New Password</label>

                                    <div class="col-md-6 mb-3">
                                        <input id="new-password" type="password" class="form-control" name="new-password" required>

                                        @if ($errors->has('new-password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('new-password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>

                                    <div class="col-md-6 mb-3">
                                        <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4 text-end">
                                        <a href="/profile" class="btn btn-secondary">
                                            Cancel
                                        </a>
                                        <button type="submit" class="btn btn-primary">
                                            Change Password
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>


     {{-- {!! Form::open(['url'=>['/profile/update-password/'.Auth::user()->id], 'method'=>'POST']) !!}
    <div class="row text-start col-md-6">
        <div class="form-group mb-3">

            <div class="form-floating ">

                {!! Form::password('current',['class'=>'form-control','placeholder'=>'Current Password','required','id'=>'inputCurrent']) !!}
                <label for="inputCurrent">Current Password</label>
            </div>
        </div>

        <div class="form-group mb-3">

            <div class="form-floating">

                {!! Form::password('new',['class'=>'form-control','placeholder'=>'New Password','required','id'=>'inputNewPassword']) !!}
                <label for="inputNewPassword" class="form-control-label">New Password</label>

            </div>
        </div>

        <div class="form-group mb-3">

            <div class="form-floating">
                {!! Form::password  ('confirm',['class'=>'form-control','placeholder'=>'Confirm Password.','required','id'=>'inputConfirmPassword']) !!}
                <label for="inputConfirmPassword" class="form-control-label">Confirm Password</label>
            </div>
        </div>



        <div class="col-md-12 form-group mb-3">
            <div class="row">
                <div class="col-6 col-sm col-md-6 text-first">
                    <a class="btn  btn-secondary text-white" href="/profile">Cancel</a>
                </div>
                <div class="col-6 col-sm col-md-6 col-md-6 text-end">
                    <button type="submit" class="btn btn-primary text-white"> Change </button>
                </div>
            </div>
        </div>

</div>

{!! Form::close() !!} --}}
                        </div>



            </div>
</div>



        <!-- Modify End -->
    </div>

</div>

@endsection
