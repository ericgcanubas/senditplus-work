<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'lastname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'company' => ['required', 'string', 'max:255'],
            'street_address' => ['required', 'string', 'max:255'],
            'contact_no' => ['required', 'string', 'max:255'],
            'zipcode' => ['required', 'string', 'max:20'],
            'city' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'subscription_type' => ['required', 'integer', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string',  'min:4', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'company' => $request->company,
            'street_address'=>$request->street_address,
            'contact_no'=>$request->contact_no,
            'zipcode'=>$request->zipcode,
            'city'=>$request->city,
            'country'=>$request->country,
            'subscription_type'=>$request->subscription_type,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),

        ]);

      //  return view("auth.login");
        event(new Registered($user));
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);

    }

}
