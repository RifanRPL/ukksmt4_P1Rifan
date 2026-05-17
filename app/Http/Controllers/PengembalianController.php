<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Log;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function store(Request $request, Alat $alat)
    {
        $validatedData=$request->validate([
            'peminjaman_id' => 'required',
            'petugas_id' => 'required',
            'kondisi' => 'required|in:rusak_ringan,rusak_sedang,rusak_berat,baik,hilang',
            'tanggal_pengembalian' => 'required',
            'catatan' => 'required', 
        ]);

        $validatedDataAlat=$request->validate([
            'kondisi' => 'required|in:rusak_ringan,rusak_sedang,rusak_berat,baik,hilang',
        ]);

        Log::create([
            'user_id' => Auth::id(),
            'aksi' => 'Tambah',
            'bagian' => 'Pengembalian',
            'created_at' => now(),
        ]);

        $pengembalian = Pengembalian::create($validatedData);
        if ($validatedDataAlat['kondisi'] == 'baik') {
            $alat->update([
                'kondisi' => 'baik',
                'status' => 1,
            ]);
        } else {
            $alat->update($validatedDataAlat);   
        }

        $peminjaman = Peminjaman::find($validatedData['peminjaman_id']);
        $batas_waktu = Carbon::parse($peminjaman->batas_waktu);
        $tanggal_pengembalian = Carbon::parse($validatedData['tanggal_pengembalian']);
        $telat = $tanggal_pengembalian->gt($batas_waktu);

        if ($validatedDataAlat['kondisi'] != 'baik' || $telat) {
            return redirect()->route('pelanggaran.create', [
                'id' => $pengembalian->id
            ]);
        } else {
            return redirect()->route('pengembalian.index');
        }
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
