<?php

use App\Http\Controllers\AlatController;
use App\Http\Controllers\AuthManual;
use App\Http\Controllers\BandingController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\UnitAlatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('auth/login');
});

Route::resource('user', UserController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('alat', AlatController::class);

Route::resource('log', LogController::class);

Route::get('/peminjaman/detail', [PeminjamanController::class, 'detail'])->name('peminjaman.detail');
Route::get('/peminjaman/edit', [PeminjamanController::class, 'edit'])->name('peminjaman.edit');
Route::resource('peminjaman', PeminjamanController::class);

Route::get('/admin/index', function () {
    return view('admin.index');
})->name('admin.index');

Route::get('/petugas/index', function () {
    return view('petugas.index');
})->name('petugas.index');

Route::get('/peminjam/index', function () {
    return view('peminjam.index');
})->name('peminjam.index');

Route::get('/login', [AuthManual::class, 'login'])->name('login');
Route::post('/login', [AuthManual::class, 'loginProses'])->name('loginProses');
Route::post('/logout', [AuthManual::class, 'logout'])->name('logout');