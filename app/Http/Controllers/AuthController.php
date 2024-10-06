<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_view()
    {

        if (Auth::guard('web')->check()) {
            return redirect()->route('user.home');
        }

        return view('/auth/login');
    }

    public function register_view()
    {
        return view('/pages/user/auth/register');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (auth()->guard('web')->attempt(['email' => $request->email, 'password' => $request->password], true)) {
            return redirect()->route('user.home');
        } else {
            return redirect()->route('user.login.view')->with('error', 'The Email and Password do not match our records, check and try again');
        }
    }

    public function logout()
    {
        auth()->guard('web')->logout();

        redirect()->route('user.login.view');
    }

    public function dashboard()
    {
        return view('/pages/user/dashboard', compact('events'));
    }

    public function register(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);


        if ($user) {
            return redirect()->route('user.login.view')->with('success', 'You have successfully registered. Please login to continue');
        }
    }
}
