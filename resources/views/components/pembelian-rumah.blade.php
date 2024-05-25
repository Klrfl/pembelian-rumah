<li class="p-4 outline-2 outline outline-stone-200">
    <a href="/transaksi/{{$transaksi->id_transaksi}}" class="grid grid-cols-2">
        <p>Kode unit: {{$transaksi->kode_unit}}</p>
        <p>Pembeli: {{$transaksi->nama_pembeli}}</p>
        <p>Harga rumah: <span class="font-bold">{{$transaksi->harga_rumah}}</span></p>
        <p>Tipe: {{$transaksi->typeRumah->type_rumah}}</p>
        <p>Luas tanah: {{$transaksi->luas_tanah}}</p>
        <p>Luas bangunan: {{$transaksi->luas_bangunan}}</p>
    </a>
</li>
