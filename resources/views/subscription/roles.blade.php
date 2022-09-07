@extends('layouts.app')

@section('content')
@foreach ($subscriptions as $subscription )


<div class="container-fluid px-4">
    <h1 class="mt-4 text-primary">Subscription </h1>
    <div class=" col-xs-8 col-lg-8 text-left">
        <h6>{{ $subscription->firstname . ' '. $subscription->lastname}}</h6>
    </div>
    <ol class="breadcrumb mb-2">
     <li class="breadcrumb-item active h5"></li>
    </ol>


    <div class="row">
         <!-- Modify Start -->

         <div class="col-md-4 col-lg-4">
            <div class="card mb-4">
                {!! Form::open(['url'=>['/subscription/roles-setup/'.$subscription->id], 'method'=>'POST']) !!}
                <div class="card-header bg-custom text-white">
                  Change Roles
                </div>
                <br/>
                <div class="card-body">
                    @if ($subscription->display==null)
                         {!!form::hidden('mode', 'add') !!}
                   @else
                        {!!form::hidden('mode', 'edit') !!}
                    @endif
                    <select name="role_id" class="form-select" aria-label="Default select example">
                        @foreach ($roles as $role )
                            <option
                                @if ($role->display == $subscription->display)
                                    selected
                                @endif
                                value="{{$role->id}}">{{$role->display}}
                            </option>
                        @endforeach
                    </select>
                </div>
                 <div class="col-md-12 form-floating mb-3 ">
                    <div class="row">
                         <div class="col-md-6 text-start">  <a class="btn btn-md bg-secondary text-white text-start" href="/subscription" style="margin-left:5px;">Back</a></div>
                        <div class="col-md-6 text-end">
                             <button type="submit" class="btn btn-md bg-primary text-white " style="margin-right:20px;">Save</button>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
         </div>
    </div>
</div>
@endforeach
@endsection
