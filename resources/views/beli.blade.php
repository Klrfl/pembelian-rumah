<x-layout-main>
    <h1>Beli rumah</h1>
    <p>Halaman untuk membeli rumah (INSERT).</p>
    <p>bentar ya formnya belum jadi</p>

    <form class="p-4 border-2 border-solid border-slate-200 max-w-4xl">
        <label for="kode-unit">Kode unit</label>
        <input type="text" name="kode-unit" id="kode-unit" required>
        <label for="nama-pembeli">Nama pembeli</label>
        <input type="text" name="nama-pembeli" id="nama-pembeli" required>
        <label for="tipe">Tipe</label>
        <select name="tipe" id="tipe" required>
            <option disabled selected>Pilih satu</option>
            @foreach ($all_type_rumah as $type_rumah)
            <option value="{{$type_rumah->id_type}}">{{ $type_rumah->type_rumah }}</option>
            @endforeach
        </select>
        <label for="luas-tanah">Luas tanah</label>
        <input type="text" name="luas-tanah" id="luas-tanah" required>
        <label for="luas-bangunan">Luas bangunan</label>
        <input type="text" name="luas-bangunan" id="luas-bangunan" required>
        <label for="harga-rumah">Harga rumah</label>
        <input type="text" name="harga-rumah" id="harga-rumah" required>

        <button class="p-4 my-4 bg-blue-500 text-white">Beli rumah</button>
    </form>
</x-layout-main>
