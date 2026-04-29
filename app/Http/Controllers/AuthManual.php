<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthManual extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function loginProses(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $role = Auth::user()->role;

            if ($role == 'admin') {
                return redirect()->route('admin.index');
            } elseif ($role == 'petugas') {
                return redirect()->route('petugas.index');
            } elseif ($role == 'peminjam') {
                return redirect()->route('peminjam.index');
            } else {
                Auth::logout();
                return back()->with('error', 'Role tidak dikenali');
            }
        }

        
        return back()->with('error', 'Incorrect Email or Password!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

}
