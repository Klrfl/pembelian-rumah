<x-layout-base>
    <main class="p-4 max-w-4xl mx-auto">
        <header class="py-4">
            <h1>Sunting transaksi</h1>
        </header>

        <form class="p-4 border-2 border-solid border-slate-200" action="{{route('transaksi.update', $transaksi->id_transaksi)}}" method="post">
            @method('PUT')
            @csrf
            <label for="kode-unit">Kode unit</label>
            <input type="text" name="kode_unit" id="kode-unit" value="{{$transaksi->kode_unit}}" required>
            <label for="nama-pembeli">Nama pembeli</label>
            <input type="text" name="nama_pembeli" id="nama-pembeli" value="{{$transaksi->nama_pembeli}}" required>
            <label for="tipe">Tipe</label>
            <select name="id_type" id="tipe" required>
                <option disabled>Pilih satu</option>
                @foreach ($all_type_rumah as $type_rumah)
                <option value="{{$type_rumah->id_type}}" {!! $type_rumah->id_type === $typeRumah->id_type ? 'selected' : '' !!}>{{ $type_rumah->type_rumah }}</option>
                @endforeach
            </select>
            <label for="luas-tanah">Luas tanah</label>
            <input type="text" name="luas_tanah" id="luas-tanah" value="{{$transaksi->luas_tanah}}" required>
            <label for="luas-bangunan">Luas bangunan</label>
            <input type="text" name="luas_bangunan" id="luas-bangunan" value="{{$transaksi->luas_bangunan}}" required>
            <label for="harga-rumah">Harga rumah</label>
            <input type="text" name="harga_rumah" id="harga-rumah" value="{{$transaksi->harga_rumah}}" required>

            <button class="p-4 my-4 bg-blue-500 text-white">Sunting transaksi</button>
        </form>

    </main>
</x-layout-base>
