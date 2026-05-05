<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allPeminjaman=Peminjaman::all();
        return view('petugas.peminjaman.tampil', compact('allPeminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $alat = Alat::findOrFail($id);
        return view('peminjam.alat.createPeminjaman', compact('alat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'peminjam_id' => 'required',
            'alat_id' => 'required',
            'status' => 'required|in:disetujui,pending,ditolak',
            'tanggal_peminjaman' => 'required',
            'tujuan' => 'required|max:255', 
        ]);

        Peminjaman::create($validatedData);

        return redirect()->route('alat.list');
    }

    /**
     * Display the specified resource.
     */
    public function show(Peminjaman $peminjaman)
    {
        return view('petugas.peminjaman.detail', compact('peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjaman)
    {
        return view('petugas.peminjaman.edit', compact('peminjaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        $validatedData=$request->validate([
            'petugas_id' => 'required',
            'status' => 'required|in:disetujui,pending,ditolak',
            'batas_waktu' => 'required',
            'catatan' => 'required|max:255', 
        ]);

        $peminjaman->update($validatedData);

        return redirect()->route('peminjaman.show', $peminjaman->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjaman)
    {
        //
    }
}
