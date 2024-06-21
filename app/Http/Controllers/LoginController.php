<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Agent;
use App\Models\Buyer;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('g-login'); // Buat view ini di resources/views/auth/
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::guard('agent')->attempt($credentials)) {
            // Jika autentikasi berhasil untuk guard 'agent'
            $request->session()->put('user_status', 'agent');
            return redirect()->intended('/homepage');
        } elseif (Auth::guard('buyer')->attempt($credentials)) {
            // Jika autentikasi berhasil untuk guard 'buyer'
            $request->session()->put('user_status', 'buyer');
            return redirect()->intended('/homepage');
        } else {
            // Jika autentikasi gagal, kembalikan ke halaman login
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }
    }

    public function logout(Request $request)
    {
        if (Auth::guard('agent')->check()) {
            Auth::guard('agent')->logout();
        } elseif (Auth::guard('buyer')->check()) {
            Auth::guard('buyer')->logout();
        }

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}