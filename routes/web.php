<?php

use App\Http\Controllers\AlatController;
use App\Http\Controllers\AuthManual;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PelanggaranAdminController;
use App\Http\Controllers\PeminjamanAdminController;
use App\Http\Controllers\PengembalianAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Pengembalian;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/admin/index', [IndexController::class, 'admin'])->name('admin.index');
Route::resource('user', UserController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('alat', AlatController::class);
Route::resource('log', LogController::class);
Route::resource('peminjamanAdmin', PeminjamanAdminController::class);
Route::resource('pengembalianAdmin', PengembalianAdminController::class);
Route::resource('pelanggaranAdmin', PelanggaranAdminController::class);


Route::get('/petugas/index', [IndexController::class, 'petugas'])->name('petugas.index');
Route::resource('peminjaman', PeminjamanController::class);
Route::get('/pengembalian/create/{id}', [PengembalianController::class, 'create'])->name('pengembalian.create');
Route::post('/pengembalian/store/{alat}', [PengembalianController::class, 'store'])->name('pengembalian.store');
Route::resource('pengembalian', PengembalianController::class);
Route::get('/pelanggaran/create/{id}', [PelanggaranController::class, 'create'])->name('pelanggaran.create');
Route::resource('pelanggaran', PelanggaranController::class);


Route::get('/peminjam/index', [IndexController::class, 'peminjam'])->name('peminjam.index');
Route::get('/peminjam/alat/detail/{id}', [AlatController::class, 'detail'])->name('alat.detail');
Route::get('/peminjam/alat/list', [AlatController::class, 'list'])->name('alat.list');
Route::get('/peminjam/riwayat/peminjaman/{peminjaman}', [PeminjamanController::class, 'detail'])->name('peminjaman.detail');
Route::get('/peminjam/riwayat/peminjaman', [PeminjamanController::class, 'riwayat'])->name('peminjaman.riwayat');
Route::get('/peminjaman/create/{id}', [PeminjamanController::class, 'create'])->name('peminjamanp.create');

Route::get('/login', [AuthManual::class, 'login'])->name('login');
Route::post('/login', [AuthManual::class, 'loginProses'])->name('loginProses');
Route::post('/logout', [AuthManual::class, 'logout'])->name('logout');