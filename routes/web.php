<?php

use App\Http\Controllers\PembelianRumahController;
use App\Models\PembelianRumah;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $all_pembelian_rumah = PembelianRumah::all();
    return view('index', ['all_pembelian_rumah' => $all_pembelian_rumah]);
});

Route::get('/beli', [PembelianRumahController::class, 'create'])->name('transaksi.create');
Route::post('/beli', [PembelianRumahController::class, 'store'])->name('transaksi.update');
Route::get('/transaksi/{id}', [PembelianRumahController::class, 'show'])->name('transaksi.show');
Route::get('/transaksi/{id}/edit', [PembelianRumahController::class, 'edit'])->name('transaksi.edit');
Route::put('/transaksi/{id}', [PembelianRumahController::class, 'update'])->name('transaksi.update');
Route::delete('/transaksi/{id}', [PembelianRumahController::class, 'destroy'])->name('transaksi.destroy');
