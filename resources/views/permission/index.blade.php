@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4 text-primary">Permissions</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active  text-dark h4"></li>
    </ol>
    <div class="row">
        <!-- Modify Start -->
        <div class="col-md-4 col-lg-4">
            <div class="card mb-4">
                <div class="card-header bg-custom text-white">
                    Permission Setup
                </div>
            <div class="card-body">

                {!! Form::open(['url'=>['/addpermission'], 'method'=>'POST']) !!}

            <div class="col-md-12 form-group mb-3">
                <div class="form-floating">
                    {!! Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Permission keyword','required']) !!}
                    <label for="" class="form-control-label">Permission keyword</label>
                </div>
                </div>
            <div class="col-md-12 form-group mb-3">
                <div class="form-floating">
                    {!! Form::text('display',old('display'),['class'=>'form-control','placeholder'=>'Display Name','required']) !!}
                    <label for="" class="form-control-label">Display Name</label>
                </div>
            </div>

            <div class="col-md-12 form-group mb-5">
                <div class="form-floating">
                    {!! Form::text('description',old('description'),['class'=>'form-control','placeholder'=>'Description','required']) !!}
                    <label for="" class="form-control-label">Description</label>
                </div>
            </div>
            <div class="col-md-12 form-check mb-4 text-sm">

                {!! Form::checkbox('access',false,0,['class'=>'form-check-input']) !!}
                <label class="form-check-label" for="flexCheckDefault">
                    <h6>Allow Access Non-SuperAdmin Users</h6>
                </label>
            </div>

            <div class="col-md-12 form-floating mb-3 ">
                <div class="row">
                    {{-- <div class="col-md-6 text-start">  <a class="btn btn-md bg-secondary text-white text-start" href="#">Cancel</a></div> --}}
                    <div class="col-md-12 text-end">  <button type="submit" class="btn btn-md bg-primary text-white text-end" href="#">Create</button> </div>
                </div>
            </div>
            <!--  -->

            {!! Form::close() !!}
        </div>
    </div>
    </div>



    <div class="col-md-8 col-lg-8">

    <div class="card mb-4">
        <div class="card-header bg-custom text-white">
        Permission List
        </div>

        <div class="card-body">
        <table id="datatablesSimple1" >
            <thead class="bg-custom text-white">
                <tr>
                    <th>keyword</th>
                    <th>display</th>
                    <th class="col-6">Description</th>
                    <th class="col-1">Access</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>keyword</th>
                    <th>display</th>
                    <th class="col-6">Description</th>
                    <th class="col-1">Access</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ( $permissions as $permission )
                <tr>
                    <td><a href="{{'permission/'.$permission->id.'/modify'}}">{{$permission->name}}</a></td>
                    <td>{{$permission->display}}</td>
                   <td> {{$permission->description}}</td>
            <td> @if ($permission->access == '1')
                 <span class="btn btn-sm btn-success">Yes</span>
            @else
                <span class="btn btn-sm btn-danger">No</span>
            @endif</td>
                </tr>
                @endforeach



            </tbody>
        </table>
        </div>

        </div>
    </div>
        <!-- Modify End -->
    </div>

</div>>
@endsection
