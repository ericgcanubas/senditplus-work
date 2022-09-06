<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;
use Hash;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('profile.edit');
    }

    public function change()
    {
        //
        return view('profile.change-password');
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
        // change password


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

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $company = $request->input('company');
        $street_address = $request->input('street_address');
        $contact_no = $request->input('contact_no');
        $city = $request->input('city');
        $country = $request->input('country');
        $zipcode = $request->input('zipcode');

         user::find($id)->update(['firstname' => $firstname,'lastname'=>$lastname,'company'=> $company , 'street_address'=>$street_address ,'contact_no'=>$contact_no,'city'=>$city,'country'=>$country,'zipcode'=>$zipcode ]);
        return redirect('profile');
    }
    public function update_avatar(Request $request)
    {

            $request->image->store('public');


            //$data= new Postimage();

            if($request->file('image')){
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('uploads/avatars'), $filename);

                $user = Auth::user();
                $user->avatar = $filename;
                $user->save();
            }

       return redirect('profile');

    }
    public function update_password(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password successfully changed!");

        // $current = $request->input('current');
        // $new = $request->input('new');
        // $confirm = $request->input('confirm');


        //  user::find($id)->update(['firstname' => $firstname,'lastname'=>$lastname,'company'=> $company , 'street_address'=>$street_address ,'contact_no'=>$contact_no,'city'=>$city,'country'=>$country,'zipcode'=>$zipcode ]);

         return redirect('profile');
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
    public function profile()
    {

       return view('profile.index');
    }
}
