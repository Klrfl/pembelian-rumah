<x-layout-base>
    <main class="max-w-4xl mx-auto p-4">

        <header class="py-4">
            <h1>Beli rumah</h1>
            <p>Halaman untuk membeli rumah (INSERT).</p>
            <p>bentar ya formnya belum jadi</p>
        </header>

        <form class="p-4 border-2 border-solid border-slate-200" action="/beli" method="post">
            @csrf
            <label for="kode-unit">Kode unit</label>
            <input type="text" name="kode_unit" id="kode-unit" required>
            <label for="nama-pembeli">Nama pembeli</label>
            <input type="text" name="nama_pembeli" id="nama-pembeli" required>
            <label for="tipe">Tipe</label>
            <select name="id_type" id="tipe" required>
                <option disabled selected>Pilih satu</option>
                @foreach ($all_type_rumah as $type_rumah)
                <option value="{{$type_rumah->id_type}}">{{ $type_rumah->type_rumah }}</option>
                @endforeach
            </select>
            <label for="luas-tanah">Luas tanah</label>
            <input type="text" name="luas_tanah" id="luas-tanah" required>
            <label for="luas-bangunan">Luas bangunan</label>
            <input type="text" name="luas_bangunan" id="luas-bangunan" required>
            <label for="harga-rumah">Harga rumah</label>
            <input type="text" name="harga_rumah" id="harga-rumah" required>

            <button class="p-4 my-4 bg-blue-500 text-white">Beli rumah</button>
        </form>
    </main>
</x-layout-base>
