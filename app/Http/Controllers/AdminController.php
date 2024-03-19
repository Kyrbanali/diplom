<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/admin/dashboard');
        }

        return redirect()->back()->withErrors(['email' => 'These credentials do not match our records.'])->withInput($request->only('email'));
    }

    public function dashboard()
    {
        if (Auth::guard('admin')->check()) {
            return view('admin.dashboard');
        }

        return redirect("/admin/login")->with('error', 'You are not allowed to access');
    }

    public function signOut()
    {
        Session::flush();
        Auth::guard('admin')->logout();
        return redirect("/admin/login")->with('success', 'You have been logged out successfully');
    }
}
