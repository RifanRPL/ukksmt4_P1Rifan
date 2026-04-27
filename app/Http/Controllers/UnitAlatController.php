<?php

namespace App\Http\Controllers;

use App\Models\unit_alat;
use Illuminate\Http\Request;

class UnitAlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.alat.unit.tampil');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.alat.unit.create');
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
    public function show(unit_alat $unit_alat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(unit_alat $unit_alat)
    {
        return view('admin.alat.unit.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, unit_alat $unit_alat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(unit_alat $unit_alat)
    {
        //
    }
}
