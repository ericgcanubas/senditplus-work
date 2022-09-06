@extends('layouts.app')

@section('content')


<div class="container-fluid px-4">
    <h1 class="mt-4 text-primary">Subscription</h1>
    <ol class="breadcrumb mb-4">
     <li class="breadcrumb-item active">subscriber List</li>
    </ol>

         <!-- Modify Start -->
    <!--  -->
         <div class="card mb-4">
        <div class="card-header bg-custom_side">

            <!-- Add Button -->
            <div class="row ">
                <div class="col-xs-4 col-lg-4 text-first">  <i class="fa fa-users text-white fa-xl"></i></div>
                <div class=" col-xs-8 col-lg-8 text-end">
                    <!-- <a href="add_client.php" class="btn  btn-sm  btn-info    text-white "><span class="fa fa-plus"></span> </a> -->
                </div>
            </div>

        </div>

        <div class="card-body">
            <table id="datatablesSimple" >
                <thead class="bg-custom text-white">
                    <tr>
                                 <th>Company</th>
                                <th>Contact No</th>
                                <th>Email Address</th>
                                <th>Fullname</th>
                                <th>Subscription Type</th>
                                <th>Status</th>
                                <th>Username</th>
                                <th>Roles</th>
                                <th style="width: 10%;">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                            <th>Company</th>
                                <th>Contact No</th>
                                <th>Email Address</th>
                                <th>Fullname</th>
                                <th>Subscription Type</th>
                                <th>Status</th>
                                <th>Username</th>
                                <th>Roles</th>
                                <th style="width: 10%;">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                               @foreach($users as $user)
                               <tr>
                                <td>{{$user->company}}</td>
                                <td>{{$user->contact_no}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->firstname. ' '. $user->lastname}}</td>
                                <td>@if ($user->subscription_type==1)
                                    Prepaid
                                @else
                                    PostPaid
                                @endif</td>
                                <td> @if ($user->status==0)
                                    <span class="badge badge-sm bg-success">Active</span>
                                @else
                                <span class="badge badge-sm bg-danger">Inactive</span>
                                @endif  </td>
                                <td>{{$user->username}}</td>
                                <td><a href="subscription/roles-setup/{{$user->id}}" class="btn btn-sm btn-success w-100">
                                    @if($user->display == null)
                                       Setup
                                    @else
                                    {{$user->display}}
                                    @endif
                                </a></td>
                                <td>
                                    <a href='#' class="btn btn-warning  btn-sm m-b-10 m-l-5 " ><i class="fa fa-edit"></i>&nbsp; Status</a>
                                    <a href='manage_subscription.php' class="btn btn-primary  btn-sm m-b-10 m-l-5 "><i class="fa fa-wrench"></i>&nbsp; Credentials</a>
                                </td>
                            </tr>
                               @endforeach





                </tbody>
            </table>
        </div>
       <!-- Modify End -->
    </div>
</div>
@endsection
