<x-layout-main title="Pembelian rumah - Home">
    <header>
        <h1>Pembelian rumah</h1>
        <p>daftar pembelian rumah</p>
    </header>

    <ul class="flex flex-col gap-4 max-w-4xl mt-4">
        @foreach ($all_pembelian_rumah as $pembelian_rumah)
        <x-pembelian-rumah :transaksi="$pembelian_rumah" />
        @endforeach
    </ul>
</x-layout-main>
