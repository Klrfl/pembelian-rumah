<x-layout-main>
    <h1>Transaksi</h1>
    <table class="border-solid border-2 border-stone-200 border-collapse">
        <thead>
            <th>Kode unit</th>
            <th>Nama pembeli</th>
            <th>Tipe</th>
            <th>Luas tanah</th>
            <th>Luas bangunan</th>
            <th>Harga rumah</th>
        </thead>
        <tbody>
            <td>{{$transaksi->kode_unit}}</td>
            <td>{{$transaksi->nama_pembeli}}</td>
            <td>{{$typeRumah->type_rumah}}</td>
            <td>{{$transaksi->luas_tanah}}</td>
            <td>{{$transaksi->luas_bangunan}}</td>
            <td>{{$transaksi->harga_rumah}}</td>
        </tbody>
    </table>

    <div class="flex gap-2 mt-4">
        <a class="text-white bg-blue-500 p-4 px-8" href="{{route('transaksi.show-update', $transaksi->id_transaksi)}}">Sunting</a>

        <form action="{{route('transaksi.destroy', $transaksi->id_transaksi)}}" method="post">
            @method('DELETE')
            @csrf
            <button class="text-white bg-red-400 p-4 px-8">Hapus</button>
        </form>
    </div>
</x-layout-main>
