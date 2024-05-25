<?php

use App\Http\Controllers\PembelianRumahController;
use App\Models\PembelianRumah;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $all_pembelian_rumah = PembelianRumah::all();
    return view('index', ['all_pembelian_rumah' => $all_pembelian_rumah]);
});

Route::get('/beli', [PembelianRumahController::class, 'index']);
Route::post('/beli', [PembelianRumahController::class, 'create']);
