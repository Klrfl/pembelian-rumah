<?php

use App\Http\Controllers\PembelianRumahController;
use App\Models\PembelianRumah;
use App\Models\TypeRumah;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $all_pembelian_rumah = PembelianRumah::all();
    return view('index', ['all_pembelian_rumah' => $all_pembelian_rumah]);
});

Route::get('/beli', function () {
    $all_type_rumah = TypeRumah::all();
    return view('beli', ['all_type_rumah' => $all_type_rumah]);
});

Route::post('/beli', [PembelianRumahController::class, 'create']);

Route::view('/ubah', 'ubah-pembelian');
Route::view('/batal', 'batal-pembelian');
