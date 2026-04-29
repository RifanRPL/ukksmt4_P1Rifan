<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Kategori;
use Illuminate\Http\Request;

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
            'min_credit_score' => 'required|max:100',
            'deskripsi' => 'required|max:255',
            'status' => 'required',
            'foto' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);
        
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images/alats'), $namaFile);

            $validatedData['foto'] = $namaFile;
        }

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
            'min_credit_score' => 'required|max:100',
            'deskripsi' => 'required|max:255',
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
        $alat->delete();
        return redirect()->route('alat.index');
    }
}
