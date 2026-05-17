<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Pelanggaran;
use App\Models\Pengembalian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PelanggaranAdminController extends Controller
{
    public function index()
    {
        $allPelanggaran=Pelanggaran::all();
        return view('admin.pelanggaran.tampil', compact('allPelanggaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengembalian=Pengembalian::all();
        return view('admin.pelanggaran.create', compact('pengembalian'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'pengembalian_id' => 'required',
            'tanggal_pelunasan' => '',
            'status' => 'required',
            'denda' => '', 
            'denda_telat' => '', 
            'deskripsi' => 'required', 
        ]);

        Pelanggaran::create($validatedData);
        
        Log::create([
            'user_id' => Auth::id(),
            'aksi' => 'Tambah',
            'bagian' => 'Pelanggaran',
            'created_at' => now(),
        ]);

        return redirect()->route('pelanggaranAdmin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelanggaran $pelanggaranAdmin)
    {
        return view('admin.pelanggaran.detail', compact('pelanggaranAdmin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelanggaran $pelanggaranAdmin)
    {
        $pengembalian=Pengembalian::all();
        return view('admin.pelanggaran.edit', compact('pengembalian','pelanggaranAdmin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelanggaran $pelanggaranAdmin)
    {
        $validatedData=$request->validate([
            'pengembalian_id' => 'required',
            'tanggal_pelunasan' => '',
            'status' => 'required',
            'denda' => '', 
            'denda_telat' => '', 
            'deskripsi' => 'required', 
        ]);

        $pelanggaranAdmin->update($validatedData);
        
        Log::create([
            'user_id' => Auth::id(),
            'aksi' => 'Edit',
            'bagian' => 'Pelanggaran',
            'created_at' => now(),
        ]);

        return redirect()->route('pelanggaranAdmin.show', $pelanggaranAdmin->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelanggaran $pelanggaranAdmin)
    {
        Log::create([
            'user_id' => Auth::id(),
            'aksi' => 'Hapus',
            'bagian' => 'Pelanggaran',
            'created_at' => now(),
        ]);

        $pelanggaranAdmin->delete();
        return redirect()->route('pelanggaranAdmin.index');
    }
}
