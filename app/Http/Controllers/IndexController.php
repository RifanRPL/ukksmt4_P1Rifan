<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Kategori;
use App\Models\Log;
use App\Models\Pelanggaran;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function admin()
    {
        $user = User::count();
        $alat = Alat::count();
        $kategori = Kategori::count();
        $peminjaman = Peminjaman::count();
        $pengembalian = Pengembalian::count();
        $pelanggaran = Pelanggaran::count();
        $logs=Log::whereDate('created_at', today())->get();
        return view('admin.index', compact('logs','user','alat','kategori','peminjaman','pengembalian','pelanggaran'));
    }

    public function petugas()
    {
        $peminjaman_telat = Peminjaman::where('batas_waktu', '<', now())->doesntHave('pengembalian')->get();
        $peminjaman_pending = Peminjaman::where('status', 'pending')->get();
        $total_peminjaman = Peminjaman::count();
        $pengembalian = Pengembalian::count();
        $pelanggaran = Pelanggaran::count();
        $logs=Log::whereDate('created_at', today())->get();
        return view('petugas.index', compact('logs','total_peminjaman','peminjaman_pending','peminjaman_telat','pengembalian','pelanggaran'));
    }

    public function peminjam()
    {
        $pelanggaran = Peminjaman::where('peminjam_id', Auth::id())->whereHas('pengembalian.pelanggaran', 
        function ($query) {
            $query->where('status', 0);
        })->get();
        $pengembalian = Peminjaman::where('status', 'disetujui')->doesntHave('pengembalian')->get();
        $peminjaman_pending = Peminjaman::where('status', 'pending')->where('peminjam_id', Auth::id())->get();
        $logs=Log::whereDate('created_at', today())->get();
        return view('peminjam.index', compact('logs','peminjaman_pending','pelanggaran','pelanggaran','pengembalian'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Log $log)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Log $log)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Log $log)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Log $log)
    {
        //
    }
}
