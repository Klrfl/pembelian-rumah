<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransaksiRequest;
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

    public function create(StoreTransaksiRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $pembelian_rumah = new PembelianRumah;

        $pembelian_rumah->kode_unit = $validated['kode_unit'];
        $pembelian_rumah->nama_pembeli = $validated['nama_pembeli'];
        $pembelian_rumah->id_type = $validated['id_type'];
        $pembelian_rumah->luas_tanah = $validated['luas_tanah'];
        $pembelian_rumah->luas_bangunan = $validated['luas_bangunan'];
        $pembelian_rumah->harga_rumah = $validated['harga_rumah'];

        $pembelian_rumah->save();

        return redirect('/');
    }

    public function update(StoreTransaksiRequest $request, string $id): RedirectResponse
    {
        $validated = $request->validated();
        $transaksi = PembelianRumah::query()->find($id);

        $transaksi->kode_unit = $validated['kode_unit'];
        $transaksi->nama_pembeli = $validated['nama_pembeli'];
        $transaksi->id_type = $validated['id_type'];
        $transaksi->luas_tanah = $validated['luas_tanah'];
        $transaksi->luas_bangunan = $validated['luas_bangunan'];
        $transaksi->harga_rumah = $validated['harga_rumah'];

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
