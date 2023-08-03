<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showSignupForm()
    {
        return view('signup');
    }

    public function signup(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = User::create($fields);

        auth()->login($user);

        return redirect('/');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt($fields)) {
            return redirect('/');
        } else {
            return redirect('/login')->with([
                'error' => 'Invalid login credentials',
            ]);
        }
    }

    public function logout(Request $request)
    {
        auth()->logout();
        return redirect('/');
    }
}
