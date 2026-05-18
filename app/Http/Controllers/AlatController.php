<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Kategori;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allAlat=Alat::all();
        return view('admin.alat.tampil', compact('allAlat'));
    }

    public function list()
    {
        $allAlat = Alat::where('status', 1)->get();
        return view('peminjam.alat.list', compact('allAlat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $allKategori=Kategori::all();
        return view('admin.alat.create', compact('allKategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'nama' => 'required|max:255',
            'kategori_id' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required|max:255',
            'kondisi' => 'required|in:rusak_ringan,rusak_sedang,rusak_berat,baik,hilang',
            'status' => 'required',
            'foto' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
        
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images/alats'), $namaFile);

            $validatedData['foto'] = $namaFile;
        }

        Log::create([
            'user_id' => Auth::id(),
            'aksi' => 'Tambah',
            'bagian' => 'Alat',
            'created_at' => now(),
        ]);
        
        Alat::create($validatedData);

        return redirect()->route('alat.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alat $alat)
    {
        return view('admin.alat.detail', compact('alat'));
    }
    public function detail($id)
    {
        $user = Auth::user()->dibatasi;
        $alat = Alat::findOrFail($id);
        return view('peminjam.alat.detail', compact('alat','user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alat $alat)
    {
        $allKategori=Kategori::all();
        return view('admin.alat.edit', compact('alat', 'allKategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alat $alat)
    {
        $validatedData=$request->validate([
            'nama' => 'required|max:255',
            'kategori_id' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required|max:255',
            'kondisi' => 'required|in:rusak_ringan,rusak_sedang,rusak_berat,baik,hilang',
            'status' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        
        if ($request->hasFile('foto')) {
            //Hapus Foto Lama
            if ($alat->foto && file_exists(public_path('assets/images/alats/'.$alat->foto))) {
            unlink(public_path('assets/images/alats/'.$alat->foto));
        }

            $file = $request->file('foto');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images/alats'), $namaFile);

            $validatedData['foto'] = $namaFile;
        }

        Log::create([
            'user_id' => Auth::id(),
            'aksi' => 'Edit',
            'bagian' => 'Alat',
            'created_at' => now(),
        ]);

        $alat->update($validatedData);

        return redirect()->route('alat.show', $alat->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alat $alat)
    {
        if ($alat->foto && file_exists(public_path('assets/images/alats/'.$alat->foto))) {
            unlink(public_path('assets/images/alats/'.$alat->foto));
        }

        Log::create([
            'user_id' => Auth::id(),
            'aksi' => 'Hapus',
            'bagian' => 'Alat',
            'created_at' => now(),
        ]);

        $alat->delete();
        return redirect()->route('alat.index');
    }
}
