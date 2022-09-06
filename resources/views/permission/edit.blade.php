@if(isset($permission))
@extends('layouts.app')
@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4 text-primary">Permissions</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active text-dark h4"> Modify</li>
    </ol>
    <div class="row">
        <!-- Modify Start -->
        <div class="col-md-4 col-lg-4">
            <div class="card mb-4">
                <div class="card-header bg-custom text-white">
                    Permission Setup
                </div>
            <div class="card-body">

                {!! Form::open(['url'=>['/permission/update/'.$permission->id], 'method'=>'POST']) !!}
            <div class="col-md-12 form-group mb-3">
                <div class="form-floating">
                    {!! Form::text('name',old('name'). $permission->name ,['class'=>'form-control','placeholder'=>'Permission keyword','required']) !!}
                    <label for="" class="form-control-label">Permission keyword</label>
                </div>
                </div>
            <div class="col-md-12 form-group mb-3">
                <div class="form-floating">
                    {!! Form::text('display',old('display'). $permission->display,['class'=>'form-control','placeholder'=>'Display Name','required']) !!}
                    <label for="" class="form-control-label">Display Name</label>
                </div>
            </div>

            <div class="col-md-12 form-group mb-5">
                <div class="form-floating">
                    {!! Form::text('description',old('description'). $permission->description ,['class'=>'form-control','placeholder'=>'Description','required']) !!}
                    <label for="" class="form-control-label">Description</label>
                </div>
            </div>
            <div class="col-md-12 form-check mb-4 text-sm">

                    @if ( $permission->access =='0')
                         {!! Form::checkbox('access',false,0,['class'=>'form-check-input']) !!}
                    @else
                        {!! Form::checkbox('access',true,1,['class'=>'form-check-input']) !!}
                    @endif

                <label class="form-check-label" for="flexCheckDefault">
                    <h6>Allow Access Non-SuperAdmin Users</h6>
                </label>
            </div>

            <div class="col-md-12 form-floating mb-3 ">
                <div class="row">
                    <div class="col-md-6 text-start">  <a class="btn btn-md bg-secondary text-white text-start" href="/permission">Cancel</a></div>

                    <div class="col-md-6 text-end">  <button type="submit" class="btn btn-md bg-primary text-white text-end" href="#">Update</button> </div>
                </div>
            </div>
            <!--  -->

            {!! Form::close() !!}
        </div>
        <div class="card-body">
            <div class="mt-1 col-1">
                {!! Form::open(['url'=>['permission/delete', $permission->id], 'method'=>'POST']) !!}
                {!! Form::submit("Delele",['class'=>'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
            </div>

        </div>
    </div>
    </div>




    </div>
        <!-- Modify End -->
    </div>

</div>>
@endsection
@endif
