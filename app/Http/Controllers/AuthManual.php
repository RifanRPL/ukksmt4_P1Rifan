<?php

namespace App\Http\Controllers;

use App\Models\Log;
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
                    
            Log::create([
                'user_id' => Auth::id(),
                'aksi' => 'Login',
                'bagian' => 'Auth',
                'created_at' => now(),
            ]);
        
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
        Log::create([
            'user_id' => Auth::id(),
            'aksi' => 'Logout',
            'bagian' => 'Auth',
            'created_at' => now(),
        ]);

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

}
