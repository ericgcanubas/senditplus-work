<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

       // $users = User::all();

        $users =  DB::table('users')
            ->leftJoin('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->leftJoin('roles', 'model_has_roles.role_id', '=', 'roles.id')
            ->select('users.*', 'roles.display')
            ->get();

        return view('subscription.index',compact('users'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_status($id)
    {
        $subscription= user::find($id);

        return view("subscription.status",compact('subscription'));
    }
    public function modify_status(Request $request, $id)
    {
        //
        $status_id = $request->status_id;
            DB::update('update users set status = '.$status_id.' where id = ?', [$id]);
        return redirect()->back();

    }
    public function show($id)
    {
        $subscriptions =  DB::table('users')
        ->leftJoin('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
        ->leftJoin('roles', 'model_has_roles.role_id', '=', 'roles.id')
        ->select('users.*', 'roles.display')
        ->where('users.id', $id)
        ->get();

        //
        $roles=role::all();
        // $subscription= user::find($id);
        return view("subscription.roles",compact('roles','subscriptions'));
    }

    public function modify_roles(Request $request, $id)
    {
        //

        $mode = $request->mode;
        $role_id = $request->role_id;

        if($mode=='add')
        {
            DB::insert('insert into model_has_roles (model_id, role_id,model_type) values (?,?,?)', [$id,$role_id,'app/user']);
        }else{
            DB::update('update model_has_roles set role_id = '.$role_id.' where model_id = ?', [$id]);
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
    }
}
