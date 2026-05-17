<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengembalianAdminController extends Controller
{
    public function index()
    {
        $allPengembalian=Pengembalian::all();
        return view('admin.pengembalian.tampil', compact('allPengembalian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peminjaman=Peminjaman::all();
        $petugas=User::where('role','petugas')->get();
        return view('admin.pengembalian.create', compact('petugas','peminjaman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validatedData=$request->validate([
            'peminjaman_id' => 'required',
            'petugas_id' => 'required',
            'kondisi' => 'required|in:rusak_ringan,rusak_sedang,rusak_berat,baik,hilang',
            'tanggal_pengembalian' => 'required', 
            'catatan' => 'required',
        ]);

        Pengembalian::create($validatedData);
        
        Log::create([
            'user_id' => Auth::id(),
            'aksi' => 'Tambah',
            'bagian' => 'Pengembalian',
            'created_at' => now(),
        ]);

        return redirect()->route('pengembalianAdmin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengembalian $pengembalianAdmin)
    {
        return view('admin.pengembalian.detail', compact('pengembalianAdmin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengembalian $pengembalianAdmin)
    {
        $peminjaman=Peminjaman::all();
        $petugas=User::where('role','petugas')->get();
        return view('admin.pengembalian.edit', compact('petugas','peminjaman','pengembalianAdmin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengembalian $pengembalianAdmin)
    {
        $validatedData=$request->validate([
            'peminjaman_id' => 'required',
            'petugas_id' => 'required',
            'kondisi' => 'required|in:rusak_ringan,rusak_sedang,rusak_berat,baik,hilang',
            'tanggal_pengembalian' => 'required', 
            'catatan' => 'required',
        ]);

        $pengembalianAdmin->update($validatedData);
        
        Log::create([
            'user_id' => Auth::id(),
            'aksi' => 'Update',
            'bagian' => 'Pengembalian',
            'created_at' => now(),
        ]);

        return redirect()->route('pengembalianAdmin.show', $pengembalianAdmin->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengembalian $pengembalianAdmin)
    {
        Log::create([
            'user_id' => Auth::id(),
            'aksi' => 'Hapus',
            'bagian' => 'Pengembalian',
            'created_at' => now(),
        ]);

        $pengembalianAdmin->delete();
        return redirect()->route('pengembalianAdmin.index');
    }
}
