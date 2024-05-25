<li class="p-4 outline-2 outline outline-stone-200">
    <a href="/transaksi/{{$transaksi->id_transaksi}}">
        <p>ID: {{$transaksi->id_transaksi}}</p>
        <p>Kode unit: {{$transaksi->kode_unit}}</p>
        <p>Nama pembeli: {{$transaksi->nama_pembeli}}</p>
        <p>Tipe: {{$transaksi->typeRumah->type_rumah}}</p>
        <p>Luas tanah: {{$transaksi->luas_tanah}}</p>
        <p>Luas bangunan: {{$transaksi->luas_bangunan}}</p>
        <p>Harga rumah: {{$transaksi->harga_rumah}}</p>
    </a>
</li>
