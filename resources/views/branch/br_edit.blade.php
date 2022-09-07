@extends('layouts.app')
@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-2 text-primary"></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"></li>
    </ol>
    <div class="row">
        <!-- Modify Start -->
        <div class="col-md-10">
        <div class="card">
            <div class="card-header bg-custom_side text-white">
            <h4 class="text-uppercase text-sm">Edit Branch</h4>
            </div>
            <div class="card-body">
            <div class="row">
                <div class="col-md-12 form-floating mb-2">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Branch Name</label>
                    <input class="form-control" type="text" value="Nabunturan Integrated Cooperative">
                </div>
                </div>
                <div class="col-md-6 form-floating mb-2">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Branch Code</label>
                    <input class="form-control" type="code" value="01010101">
                </div>
                </div>
                <div class="col-md-6 form-floating mb-2">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Branch Address</label>
                    <input class="form-control" type="address" value="Corner Echavez & Fuentes St. P-10, Poblacion, Nabunturan, ComVal Province		
">
                </div>
                </div>
                <div class="ol-md-12  text-end">
                <div class="form-group py-4">
                    <a class="btn btn-lg btn-danger" href="branch.php">Cancel</a>
                    <a class="btn btn-lg bg-success text-white" href="">Update</a>
                </div>
                </div>
            </div>
            </div>            
        </div>
        </div>
        <!-- Modify End -->
    </div>
</div>
@endsection;