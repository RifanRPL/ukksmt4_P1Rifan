<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Log;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanAdminController extends Controller
{
    public function index()
    {
        $allPeminjaman=Peminjaman::all();
        return view('admin.peminjaman.tampil', compact('allPeminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alat=Alat::all();
        $peminjam=User::where('role','peminjam')->get();
        $petugas=User::where('role','petugas')->get();
        return view('admin.peminjaman.create', compact('petugas','peminjam','alat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'peminjam_id' => 'required',
            'petugas_id' => '',
            'alat_id' => 'required',
            'status' => 'required|in:pending,disetujui,ditolak',
            'tanggal_peminjaman' => 'required', 
            'batas_waktu' => '', 
            'tujuan' => 'required', 
            'catatan' => 'required',
        ]);

        Peminjaman::create($validatedData);
        
        Log::create([
            'user_id' => Auth::id(),
            'aksi' => 'Tambah',
            'bagian' => 'Peminjaman',
            'created_at' => now(),
        ]);

        return redirect()->route('peminjamanAdmin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Peminjaman $peminjamanAdmin)
    {
        return view('admin.peminjaman.detail', compact('peminjamanAdmin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjamanAdmin)
    {
        $alat=Alat::all();
        $peminjam=User::where('role','peminjam')->get();
        $petugas=User::where('role','petugas')->get();
        return view('admin.peminjaman.edit', compact('petugas','peminjam','alat','peminjamanAdmin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peminjaman $peminjamanAdmin)
    {
        $validatedData=$request->validate([
            'peminjam_id' => 'required',
            'petugas_id' => '',
            'alat_id' => 'required',
            'status' => 'required|in:pending,disetujui,ditolak',
            'tanggal_peminjaman' => 'required', 
            'batas_waktu' => '', 
            'tujuan' => 'required', 
            'catatan' => 'required',
        ]);

        $peminjamanAdmin->update($validatedData);
        
        Log::create([
            'user_id' => Auth::id(),
            'aksi' => 'Edit',
            'bagian' => 'Peminjaman',
            'created_at' => now(),
        ]);

        return redirect()->route('peminjamanAdmin.show', $peminjamanAdmin->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjamanAdmin)
    {
        Log::create([
            'user_id' => Auth::id(),
            'aksi' => 'Hapus',
            'bagian' => 'Peminjaman',
            'created_at' => now(),
        ]);

        $peminjamanAdmin->delete();
        return redirect()->route('peminjamanAdmin.index');
    }
}
