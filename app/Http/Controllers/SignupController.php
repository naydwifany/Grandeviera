<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SignupController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'email' => 'required|email|unique:buyer,emailBuyer',
            'username' => 'required|unique:buyer,usernameBuyer',
            'password' => 'required|min:8|confirmed',
        ]);

        // Mengirim data ke Supabase
        $response = Http::withHeaders([
            'apikey' => env('SUPABASE_API_KEY'),
            'Authorization' => 'Bearer ' . env('SUPABASE_API_KEY')
        ])->post(env('SUPABASE_URL') . '/rest/v1/buyer', [
            'usernameBuyer' => $request->username,
            'emailBuyer' => $request->email,
            'passwordBuyer' => bcrypt($request->password),
        ]);

        // Debugging: cek status dan body dari respon
        if ($response->failed()) {
            dd($response->status(), $response->body(), $response->json());
        }

        // Cek respons
        if ($response->successful()) {
            return redirect('/signup')->with('success', 'Account created successfully!');
        } else {
            return redirect('/signup')->withErrors('Failed to create account.');
        }
    }
}