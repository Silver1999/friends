<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function getSignUp()
    {
        return view('auth.signup');
    }

    public function postSignUp(Request $request)
    {
        $this->validate(
            $request,
            [
                'email'    => 'required|unique:users|email|max:255',
                'username' => 'required|alpha_dash|max:20',
                'password' => 'required|min:6',
            ]
        );
        User::create(
            [
                'email'    => $request->input('email'),
                'username' => $request->input('username'),
                'password' => bcrypt($request->input('password')),
            ]
        );
        if (Auth::attempt(
            $request->only(['email', 'password'])
        )
        ) {
            return redirect()->route('home')->with(
                'success',
                'You are succesfule singin'
            );
        }

    }

    public function getSignIn()
    {
        return view('auth.signin');
    }

    public function postSignIn(Request $request)
    {
        $this->validate(
            $request,
            [
                'email'    => 'required|email|max:255',
                'password' => 'required|min:6',
            ]
        );
        if (!Auth::attempt(
            $request->only(['email', 'password']),
            $request->has('remember')
        )
        ) {
            return redirect()->back()->with(
                'info',
                'Incorect email or password!'
            );
        }
        return redirect()->route('home')->with(
            'success',
            'You are succesfule singin'
        );
    }
    public function  logout(){
        Auth::logout();
       return redirect()->route('home');
    }


}
