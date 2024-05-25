<?php

namespace App\Http\Controllers;

use App\Models\PembelianRumah;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PembelianRumahController extends Controller
{
    public function create(Request $request): RedirectResponse
    {
        $pembelian_rumah = new PembelianRumah;

        $pembelian_rumah->kode_unit = $request->kode_unit;
        $pembelian_rumah->nama_pembeli = $request->nama_pembeli;
        $pembelian_rumah->id_type = $request->id_type;
        $pembelian_rumah->luas_tanah = $request->luas_tanah;
        $pembelian_rumah->luas_bangunan = $request->luas_bangunan;
        $pembelian_rumah->harga_rumah = $request->harga_rumah;

        $pembelian_rumah->save();

        return redirect('/');
    }
}
