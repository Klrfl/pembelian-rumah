<x-layout-main>
    <header>
        <h1>Pembelian rumah</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae necessitatibus error ut animi saepe totam assumenda illum repellendus consequatur voluptas in distinctio minus quidem excepturi, nostrum magnam inventore ullam consequuntur.</p>
    </header>

    <ul class="flex flex-col gap-4 max-w-4xl mt-4">
        @foreach ($all_pembelian_rumah as $pembelian_rumah)
        <x-pembelian-rumah :transaksi="$pembelian_rumah" />
        @endforeach
    </ul>
</x-layout-main>
