<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\KategoriController;
use App\Http\Livewire\Backend\Barang;
use App\Http\Livewire\Backend\Kategori;
use Illuminate\Support\Facades\Route;

// frontend
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/detail/{nama}', [FrontendController::class, 'detail']);

Route::group(['middleware' => ['auth', 'cekRole:admin']], function () {
    // backend
    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // kategori
    Route::get('/kategori', [Kategori::class]);
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    // barang
    Route::get('/barang', [Barang::class]);
    Route::get('/barang', [BarangController::class, 'index'])->name('barang');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Auth::routes();
