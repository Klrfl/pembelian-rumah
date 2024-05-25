<?php

namespace App\Http\Controllers;

use App\Models\PembelianRumah;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PembelianRumahController extends Controller
{
    public function create(Request $request): RedirectResponse
    {
        $new_pembelian_rumah = new PembelianRumah;
        $new_pembelian_rumah->kode_unit = $request->kode_unit;

        return redirect('index');
    }
    //
}
