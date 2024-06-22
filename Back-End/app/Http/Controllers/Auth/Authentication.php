<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Authentication extends Controller
{
    function login()
    {
        return view('Auth.Login', [
            'title' => 'Login'
        ]);
    }

    function loginProcess(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password], $request->exists('remember'))) {
            if (Auth::user()->role == 'Admin')
                return redirect()->intended(route('dashboard'));
            else {
                Auth::logout();
                return redirect()->route('login')->withInput()->with('error', 'Akun tidak ditemukan');
            }
        } else {
            return redirect()->route('login')->withInput()->with('error', 'Akun tidak ditemukan');
        }
    }

    function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }
}