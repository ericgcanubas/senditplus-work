<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = role::all();
        $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")->get();

         return view("role.index",compact('roles','rolePermissions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view("role.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $name = $request->input('name');
        $display = $request->input('display');

        $role = Role::create(['name' => $name,'display'=>$display]);
            ///
            return redirect('role');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //


        $role = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
            ->where("role_has_permissions.role_id",$id)
            ->get();

        $permissions = Permission::all();
        return view("role/modify-permissions",compact('role','rolePermissions','permissions'));
    }
    public function update_role_has_permission(Request $request, $id)
    {
        //
        $Permissions = Permission::all();
        $rolePermissionExist = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")->where("role_has_permissions.role_id",$id)->get();
        foreach($Permissions as $Permission){
                $isdeleted=true;
            foreach((array) $request->checkbox as $key=>$name){

                if($Permission->id == $name){


                    $IsExist = false;
                    foreach($rolePermissionExist as $exist){
                        if  ( $exist->permission_id == $name ){
                            // Still Exists
                            $IsExist = true;
                            $isdeleted= false;
                           // 'exists <br/>';

                        }

                   }
                   if ($IsExist==false){
                      //New
                      DB::insert('insert into role_has_permissions (permission_id, role_id) values (?, ?)', [$name, $id]);
                    $isdeleted= false;
                   }
                }

            }

            if ($isdeleted == true){
                $got_to_delete = false;

                foreach($rolePermissionExist as $exist){
                    if  ( $exist->permission_id == $Permission->id  ){
                        $got_to_delete = true;
                    }
               }

               if ($got_to_delete == true){
                // 'delete <br/>';

                    DB::delete('delete from role_has_permissions where role_id = ? and permission_id = ? ',[$id,$Permission->id]);
               }else{
                // 'nothing happen. <br/>';
               }

            }

        }

        return redirect()->back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $role = role::find($id);
        return view('role.edit',compact('role'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        role::find($id)->update($request->all());
        return redirect('role');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Role::find($id)->delete();
        return redirect('role');

        // $roles = role::all();
        // return view("role.index",compact('roles'));
    }
}
