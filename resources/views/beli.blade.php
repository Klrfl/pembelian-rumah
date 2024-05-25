<x-layout-main>
    <h1>Beli rumah</h1>
    <p>Halaman untuk membeli rumah (INSERT).</p>
    <p>bentar ya formnya belum jadi</p>

    <form class="p-4 border-2 border-solid border-slate-200 max-w-4xl">
        <label for="kode-unit">Kode unit</label>
        <input type="text" name="kode-unit" id="kode-unit">
        <label for="nama-pembeli">Nama pembeli</label>
        <input type="text" name="nama-pembeli" id="nama-pembeli">
        <label for="tipe">Tipe</label>
        <select name="tipe" id="tipe">
            <option value=""></option>
        </select>
        <label for="luas-tanah">Luas tanah</label>
        <input type="text" name="luas-tanah" id="luas-tanah">
        <label for="luas-bangunan">Luas bangunan</label>
        <input type="text" name="luas-bangunan" id="luas-bangunan">
        <label for="harga-rumah">Harga rumah</label>
        <input type="text" name="harga-rumah" id="harga-rumah">

        <button class="p-4 my-4 bg-blue-500 text-white">Beli rumah</button>
    </form>
</x-layout-main>
