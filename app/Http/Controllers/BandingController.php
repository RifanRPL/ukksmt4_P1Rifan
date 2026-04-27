<?php

namespace App\Http\Controllers;

use App\Models\Banding;
use Illuminate\Http\Request;

class BandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.banding.tampil');
    }

    public function detail()
    {
        return view('admin.banding.detail');
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
    public function show(Banding $banding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banding $banding)
    {
        return view('admin.banding.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banding $banding)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banding $banding)
    {
        //
    }
}
