<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        return view ('auth.register');

    }

    public function storeRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    
        $user = new \App\Models\User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->role_id = 2;
        $user->save();
    
        return redirect('/')->with('success', 'Registration successful. You can now login.');
    }
     

    public function login()
    {
        //dd(Hash::make('12345'));
        if(!empty(Auth::check()))
        {
            return redirect('panel/dashboard');
        }
        return view('auth.login');
    }

    public function  auth_login(Request $request)
    {
        $remember = !empty($request->remember)? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember))
        {
            return redirect('panel/dashboard');
        }
        else
        {
            return redirect()->back()->with('error', "Please enter currect email and password");
    }
}
    public function logout ()
    {
        Auth::logout(); 
        return redirect (url(''));
    }
}