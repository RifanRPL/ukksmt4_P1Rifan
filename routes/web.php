<?php

use App\Http\Controllers\AlatController;
use App\Http\Controllers\AuthManual;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Pengembalian;

Route::get('/', function () {
    return view('auth/login');
});

Route::resource('user', UserController::class);

Route::resource('kategori', KategoriController::class);

Route::get('/alat/detail/{id}', [AlatController::class, 'detail'])->name('alat.detail');
Route::get('/alat/list', [AlatController::class, 'list'])->name('alat.list');
Route::resource('alat', AlatController::class);

Route::resource('log', LogController::class);


Route::get('/peminjaman/create/{id}', [PeminjamanController::class, 'create'])->name('peminjaman.create');
Route::resource('peminjaman', PeminjamanController::class);

Route::get('/pengembalian/create/{id}', [PengembalianController::class, 'create'])->name('pengembalian.create');
Route::resource('pengembalian', PengembalianController::class);

Route::resource('pelanggaran', PelanggaranController::class);

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