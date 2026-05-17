<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Pelanggaran;
use App\Models\Pengembalian;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allPelanggaran=Pelanggaran::all();
        return view('petugas.pelanggaran.tampil', compact('allPelanggaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        $batas_waktu = Carbon::parse($pengembalian->peminjaman->batas_waktu);
        $tanggal_pengembalian = Carbon::parse($pengembalian->tanggal_pengembalian);
        return view('petugas.pelanggaran.create', compact('pengembalian','batas_waktu','tanggal_pengembalian'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'pengembalian_id'=>'required',
            'denda'=>'',
            'denda_telat'=>'',
            'deskripsi'=>'required',
            'status'=>'required',
        ]);

        $pengembalian = Pengembalian::find($validatedData['pengembalian_id']);
        $user = $pengembalian->peminjaman->peminjam;
        $user->update([
            'dibatasi' => 1,
        ]);

        Log::create([
            'user_id' => Auth::id(),
            'aksi' => 'Tambah',
            'bagian' => 'Pelanggaran',
            'created_at' => now(),
        ]);

        Pelanggaran::create($validatedData);

        return redirect()->route('pelanggaran.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelanggaran $pelanggaran)
    {
        $batas_waktu = Carbon::parse($pelanggaran->pengembalian->peminjaman->batas_waktu);
        $tanggal_pengembalian = Carbon::parse($pelanggaran->pengembalian->tanggal_pengembalian);
        $hariTelat = 0;
        if ($tanggal_pengembalian->gt($batas_waktu)) {
            $hariTelat = $batas_waktu->diffInDays($tanggal_pengembalian);
        }   

        $denda_telat = $pelanggaran->denda_telat / 100 * $pelanggaran->pengembalian->peminjaman->alat->harga * $hariTelat;
        $denda_kondisi = $pelanggaran->denda / 100 * $pelanggaran->pengembalian->peminjaman->alat->harga;
        $denda = $denda_telat + $denda_kondisi;
        return view('petugas.pelanggaran.detail', compact('pelanggaran','denda'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelanggaran $pelanggaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelanggaran $pelanggaran)
    {
        $validatedData=$request->validate([
            'status'=>'required',
        ]);

        $validatedData['tanggal_pelunasan'] = now()->toDateString();

        $user = $pelanggaran->pengembalian->peminjaman->peminjam;

        $user->update([
            'dibatasi' => 0,
        ]);

        Log::create([
            'user_id' => Auth::id(),
            'aksi' => 'Pelunasan',
            'bagian' => 'Pelanggaran',
            'created_at' => now(),
        ]);

        $pelanggaran->update($validatedData);

        return redirect()->route('pelanggaran.show', $pelanggaran->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelanggaran $pelanggaran)
    {
        //
    }
}
