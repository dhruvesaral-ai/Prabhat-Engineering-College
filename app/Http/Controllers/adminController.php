<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Auth as SupportFacadesAuth;
use Illuminate\Support\Facades\Log;

class adminController extends Controller
{
    public function admin_dashboard(){
        return view('admin.dashboard');
    }
    public function admin_login(){
        return view('auth.admin-login');
    }
    public function admin_loggedin(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    try {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        } else {
            return back()->with('error', 'Invalid Credentials');
        }
    } catch (\Exception $e) {
        Log::error('login error'. $e);
        return back()->with('error', 'Something went wrong. Please try again.');
    }
}

public function admin_logout(Request $request){
    Auth::guard('admin')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('admin.login')->with('success', 'Loggedout Successfully.');

}

}
