
@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <ol class="breadcrumb mb-2">
            <li class="breadcrumb-item active h5"> Branch List</li>
            <a href="{{url ('br_create')}}" class="btn btn-sm btn-light text-success"style="position:absolute; margin-left:63rem;"><span class="fa fa-plus" ></span>  Create</a> 
        </ol>

                <!-- Modify Start -->    

        <div class="card mb-2">
            <div class="card-body">
                <table id="datatablesSimple" >
                <thead class="bg-custom text-white">
                        <tr>
                            <th>Branch Code</th>
                            <th>Branch Name</th>
                            <th>Address</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Status</th>
                            <th>Action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01010101</td>
                            <td>Nabunturan Integrated Cooperative</td>
                            <td>Corner Echavez & Fuentes St. P-10, Poblacion, Nabunturan, ComVal Province</td>
                            <td>05-25-2022 13:47:21</td>
                            <td>05-25-2022 13:47:21</td>
                            <td><span class="btn btn-success btn-sm mt-1">Active</span></td>
                            <td>
                            <a  href="{{url('br_edit')}}" class="btn btn-primary btn-sm mt-1" ><span class="fa fa-edit"></span> Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td>101010</td>
                            <td>Palapag Teachers Employees and Community Multipurpose Cooperative</td>
                            <td>Corner Echavez & Fuentes St. P-10, Poblacion, Nabunturan, ComVal Province</td>
                            <td>05-26-2022 13:47:22</td>
                            <td>05-26-2022 13:47:22</td>
                            <td><span class="btn btn-danger btn-sm mt-1">Inactive</span></td>
                            <td>
                                <a  href="edit_branch.php" class="btn btn-primary btn-sm mt-1" ><span class="fa fa-edit"></span> Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td>253-9999</td>
                            <td>Nabunturan Integrated Cooperative</td>
                            <td>Corner Echavez & Fuentes St. P-10, Poblacion, Nabunturan, ComVal Province</td>
                            <td>05-27-2022 13:47:23</td>
                            <td>05-27-2022 13:47:23</td>
                            <td><span class="btn btn-success btn-sm mt-1">Active</span></td>
                            <td>
                            <a  href="edit_branch.php" class="btn btn-primary btn-sm mt-1" ><span class="fa fa-edit"></span> Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            <!-- Modify End -->
        </div> 
    </div>
@endsection;
