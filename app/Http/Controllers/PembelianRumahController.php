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
        $typeRumah = $transaksi->typeRumah;
        return view('transaksi', ['transaksi' => $transaksi, 'typeRumah' => $typeRumah]);
    }

    public function showUpdate(string $id): View |Factory
    {
        $all_type_rumah = TypeRumah::all();
        $transaksi = PembelianRumah::query()->find($id);
        $typeRumah = $transaksi->typeRumah;

        return view('transaksi-edit', [
            'transaksi' => $transaksi,
            'all_type_rumah' => $all_type_rumah,
            'typeRumah' => $typeRumah
        ]);
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

    public function update(Request $request, string $id): RedirectResponse
    {
        $transaksi = PembelianRumah::query()->find($id);

        $transaksi->kode_unit = $request->kode_unit;
        $transaksi->nama_pembeli = $request->nama_pembeli;
        $transaksi->id_type = $request->id_type;
        $transaksi->luas_tanah = $request->luas_tanah;
        $transaksi->luas_bangunan = $request->luas_bangunan;
        $transaksi->harga_rumah = $request->harga_rumah;

        $transaksi->save();

        return redirect()->route('transaksi.show', ['id' => $transaksi->id_transaksi]);
    }

    public function destroy(string $id): RedirectResponse
    {
        $transaksi = PembelianRumah::query()->find($id);
        $transaksi->delete();
        return redirect('/');
    }
}
