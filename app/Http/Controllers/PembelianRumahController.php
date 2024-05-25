<?php

namespace App\Http\Controllers;

use App\Models\PembelianRumah;
use App\Models\TypeRumah;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PembelianRumahController extends Controller
{
    /**
     * @return View|Factory
     */
    public function index(): View|Factory
    {
        $all_type_rumah = TypeRumah::all();
        return view('beli', ['all_type_rumah' => $all_type_rumah]);
    }

    public function show(string $id): View|Factory
    {
        $transaksi = PembelianRumah::query()->find($id);
        return view('transaksi', ['transaksi' => $transaksi]);
    }

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

    public function destroy(string $id): RedirectResponse
    {
        $transaksi = PembelianRumah::query()->find($id);
        $transaksi->delete();
        return redirect('/');
    }
}
