@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4 text-primary">Roles</h1>
    <div class=" col-xs-8 col-lg-8 text-left">
        <a href="role/create" class="btn btn-sm  btn-info    text-white "><span class="fa fa-plus"></span>  Create Roles</a>
    </div>
    <ol class="breadcrumb mb-2">
     <li class="breadcrumb-item active h5"></li>
    </ol>

         <!-- Modify Start -->

    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple" >
            <thead class="bg-custom text-white">
                    <tr>
                        <th class="col-2">Name</th>
                        <th class="col-3">Display</th>
                        <th class="col-6">Permission</th>
                        <th class="col-1">Action</th>
                </thead>
                <tfoot>
                    <tr>
                        <th class="col-2">Name</th>
                        <th class="col-3">Display</th>
                        <th class="col-6">Permission</th>
                        <th class="col-1"></th>

                    </tr>
                </tfoot>
                <?php
                function random_color($index){
                    $return_value = "";
                    switch ($index) {
                        case '0':
                        $return_value = "btn-primary";
                            break;
                        case '1':
                        $return_value =  "btn-secondary";
                            break;
                        case '2':
                        $return_value =  "btn-success";
                            break;
                        case '3':
                        $return_value =  "btn-danger";
                            break;
                        case '4':
                        $return_value =  "btn-warning";
                            break;
                        case '5':
                        $return_value =  "btn-info";
                            break;
                        case '6':
                        $return_value =  "btn-light";
                            break;
                        case '7':
                        $return_value =  "btn-dark";
                            break;

                    }
                       return $return_value;
                }
                ?>
                <tbody>
                    @foreach ( $roles as $role )
                    <tr>
                    <td>{{$role->name}}</td>
                    <td>{{$role->display}}</td>
                        <td>
                            <?php $index=0;?>
                            @foreach ( $rolePermissions as $rolePermission )
                            @if ($rolePermission->role_id == $role->id)
                                <button class="btn btn-sm <?php echo random_color($index); ?> bg-gradient ">{{ $rolePermission->display; }}</button>
                                <?php if($index==7){
                                         $index=0;
                                }else{

                                    $index++;

                                } ?>

                            @endif
                            @endforeach

                    </td>
                            <td>
                                <a  href="{{'role/'.$role->id.'/edit'}}" class="btn btn-success btn-sm mt-1 w-100 " > <span class="fa fa-edit"></span> Edit</a>
                                <div class="mt-1 ">
                                    {!! Form::open(['url'=>['role/delete', $role->id], 'method'=>'POST']) !!}
                                {{-- {!! Form::submit("Delele",['class'=>'btn btn-danger btn-sm w-100']) !!} --}}
                                    <button type="submit" class="'btn btn-danger btn-sm w-100" ><span class="fa fa-trash"></span> Delete</button>
                                    {!! Form::close() !!}
                                </div>
                                <a  href="{{'role/modify/'.$role->id}}" class="btn btn-warning btn-sm mt-1 w-100" > <span class="fa fa-wrench"></span> Permission</a>
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
