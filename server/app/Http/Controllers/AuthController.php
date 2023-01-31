<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:web')->except('logout');
    }

    public function viewLogin()
    {
        if (Auth::guard('web')->check()) {
            return redirect()->route('member.index');
        } else {
            return view('auth.login');
        }
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        $remember    = $request->get('remember') ?? false;

        if (Auth::guard('web')->attempt($credentials, $remember)) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->back()->withErrors([
                    'wrong_username_or_password' => __('Wrong email or password'),
                ])->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('viewLogin')->withMessage('Logout successful');
    }
}
