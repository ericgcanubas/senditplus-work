<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   public function index()
   {
        $permissions = permission::all();
        return view("permission.index",compact('permissions'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $name = $request->input('name');
        $display = $request->input('display');
        $description = $request->input('description');

        $access = $request->input('access');
        $access_n = 0;
            if ($access== true){
                $access_n = 1;
            }else{
                $access_n = 0;
            }
        $permission = permission::create(['name' => $name,'display'=>$display,'description'=> $description , 'access'=>$access_n]);
            ///
        return redirect('permission');

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = permission::find($id);

        return view('permission.edit',compact('permission'));
        //
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

        $name = $request->input('name');
        $display = $request->input('display');
        $description = $request->input('description');

        $access = $request->input('access');
        $access_n = 0;

        if ($access== true){
            $access_n = 1;
        }else{
            $access_n = 0;
        }

         permission::find($id)->update(['name' => $name,'display'=>$display,'description'=> $description , 'access'=>$access_n]);

        return redirect('permission');
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
        permission::find($id)->delete();
        return redirect('permission');
    }
}
