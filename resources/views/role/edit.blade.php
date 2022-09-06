
@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4 text-primary"></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"></li>
    </ol>
      <div class="row">
        <!-- Modify Start -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-custom_side text-white">
              <h4 class="text-uppercase text-sm">Edit Role</h4>
            </div>
            <div class="card-body">
              <div class="row">

                @if(isset($role))

                {!! Form::open(['url'=>['/role/update/'.$role->id], 'method'=>'POST']) !!}
                <div class="col-md-12 form-group  mb-2">
                    <div class="form-floating">

                    {!! Form::text('name',old('name'). $role->name ,['class'=>'form-control','placeholder'=>'Role Name','required']) !!}
                    <label for="example-text-input" class="form-control-label">Role Name</label>
                    </div>
                </div>
                <div class="col-md-12 form-group  mb-2">
                    <div class="form-floating">

                    {!! Form::text('display',old('display'). $role->display ,['class'=>'form-control','placeholder'=>'Dispaly','required']) !!}
                    <label for="example-text-input" class="form-control-label">Display</label>
                    </div>
                </div>
                <div class="ol-md-12  text-end">
                    <div class="form-group py-4">
                        <a class="btn btn-lg btn-danger" href="/role">Cancel</a>
                     {!! Form::submit('Update',['class'=>'btn btn-lg bg-success text-white']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
                @else


                @endif
              </div>
            </div>
          </div>
        </div>
        <!-- Modify End -->
      </div>
  </div>

@endsection
