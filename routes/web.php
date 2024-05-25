<?php

use App\Models\TypeRumah;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $all_type_rumah = TypeRumah::all();
    return view('index', ['all_type_rumah' => $all_type_rumah]);
});

Route::get('/beli', function () {
    $all_type_rumah = TypeRumah::all();
    return view('beli', ['all_type_rumah' => $all_type_rumah]);
});

Route::view('/ubah', 'ubah-pembelian');
Route::view('/batal', 'batal-pembelian');
