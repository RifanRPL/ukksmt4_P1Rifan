<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allPengembalian=Pengembalian::all();
        return view('petugas.pengembalian.tampil', compact('allPengembalian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        return view('petugas.pengembalian.create', compact('peminjaman'));
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

        return redirect()->route('pengembalian.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengembalian $pengembalian)
    {
        return view('petugas.pengembalian.detail', compact('pengembalian'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengembalian $pengembalian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengembalian $pengembalian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengembalian $pengembalian)
    {
        //
    }
}
