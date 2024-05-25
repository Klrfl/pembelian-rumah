<?php

use App\Models\TypeRumah;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $all_type_rumah = TypeRumah::all();
    return view('index', ['all_type_rumah' => $all_type_rumah]);
});
