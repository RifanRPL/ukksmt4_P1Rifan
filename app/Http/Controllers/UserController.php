<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allUser=User::all();
        return view('admin.user.tampil', compact('allUser'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData=$request->validate([
            'nik' => 'required',
            'nama' => 'required|max:255',
            'no_hp' => 'required',
            'alamat' => 'required|max:255',
            'tanggal_lahir' => 'required', 
            'email' => 'required|max:255', 
            'password' => 'required|max:100', 
            'role' => 'required|in:admin,petugas,peminjam', 
            'credit_score' => 'required', 
            'ban_status' => 'required', 
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.user.detail', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {

        $validatedData=$request->validate([
            'nik' => 'required',
            'nama' => 'required|max:255',
            'no_hp' => 'required',
            'alamat' => 'required|max:255',
            'tanggal_lahir' => 'required', 
            'email' => 'required|max:255', 
            'role' => 'required|in:admin,petugas,peminjam', 
            'credit_score' => 'required', 
            'ban_status' => 'required', 
        ]);

        $user->update($validatedData);

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
