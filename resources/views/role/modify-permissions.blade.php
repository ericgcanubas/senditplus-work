@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4 text-primary">Role {{ $role->name}}</h1>
    <div class=" col-xs-8 col-lg-8 text-left">
        <h4>Modify Permissions</h4>
    </div>
    <ol class="breadcrumb mb-2">
     <li class="breadcrumb-item active h5"></li>
    </ol>


    <div class="row">
         <!-- Modify Start -->



         <div class="col-md-4 col-lg-4">
            <div class="card mb-4">
                {!! Form::open(['url'=>['/role/modify/'.$role->id], 'method'=>'POST']) !!}
                <div class="card-header bg-custom text-white">
                    Permission List
                </div>
                <br/>
                <div class="card-body">
                <table id="datatablesSimple" >
                    <thead class="bg-custom text-white">
                            <tr>


                                <th class="col-10">Permission</th>
                                <th class="col-2"></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>

                                <th class="col-10">Permission</th>
                                <th class="col-2"></th>
                            </tr>
                        </tfoot>

                        <tbody>
                  @foreach ( $permissions as $permission )
                  <?php $haspermission=false;?>
                  @foreach ( $rolePermissions as $rolePermission )
                      @if ($permission->id == $rolePermission->permission_id )
                          <?php $haspermission=true;?>
                          @break
                      @else
                          <?php $haspermission=false;?>
                      @endif
                  @endforeach
                                <tr>
                                <td>
                                    <label class="form-check-label" for="flexCheckDefault">
                                    <h6>{{$permission->display}} </h6>
                                    </label>
                                </td>
                                @if ($haspermission==true)

                                  <td class="text-center">      <input type="checkbox" name="checkbox[]"  value="{{ $permission->id }}" checked class="form-check-input"></td>
                                @else

                                     <td class="text-center">   <input type="checkbox" name="checkbox[]" value="{{ $permission->id }}" unchecked  class="form-check-input"></td>
                                @endif




                                </tr>
                 @endforeach
                        </tbody>
                </table>
                </div>
                 <div class="col-md-12 form-floating mb-3 ">
                    <div class="row">
                         <div class="col-md-6 text-start">  <a class="btn btn-md bg-secondary text-white text-start" href="/role" style="margin-left:5px;">Back</a></div>
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
@endsection
