<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Log;
use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function riwayat()
    {
        $allPeminjaman = Peminjaman::where('peminjam_id', Auth::id())->get();
        return view('peminjam.riwayat.peminjaman', compact('allPeminjaman'));
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

        Log::create([
            'user_id' => Auth::id(),
            'aksi' => 'Tambah',
            'bagian' => 'Peminjaman',
            'created_at' => now(),
        ]);

        Peminjaman::create($validatedData);

        return redirect()->route('alat.list')->with('success', 'Pengajuan berhasil ditambahkan!');;
    }

    /**
     * Display the specified resource.
     */
    public function show(Peminjaman $peminjaman)
    {
        return view('petugas.peminjaman.detail', compact('peminjaman'));
    }

    public function detail(Peminjaman $peminjaman)
    {   
        $denda = 0;
        if($peminjaman->pengembalian){
        $batas_waktu = Carbon::parse($peminjaman->batas_waktu);
        $tanggal_pengembalian = Carbon::parse($peminjaman->pengembalian->tanggal_pengembalian);
        $hariTelat = 0;
        if ($tanggal_pengembalian->gt($batas_waktu)) {
            $hariTelat = $batas_waktu->diffInDays($tanggal_pengembalian);
        }   

        $denda_telat = $peminjaman->pengembalian->pelanggaran?->denda_telat / 100 * $peminjaman->alat->harga * $hariTelat;
        $denda_kondisi = $peminjaman->pengembalian->pelanggaran?->denda / 100 * $peminjaman->alat->harga;
        $denda = $denda_telat + $denda_kondisi;
        }
        
        return view('peminjam.riwayat.detail', compact('peminjaman','denda'));
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

        if ($validatedData['status'] == 'disetujui') {
            $alat = $peminjaman->alat;
            $alat->update([
            'status' => 0,
        ]);
        };

        Log::create([
            'user_id' => Auth::id(),
            'aksi' => 'Review',
            'bagian' => 'Peminjaman',
            'created_at' => now(),
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
