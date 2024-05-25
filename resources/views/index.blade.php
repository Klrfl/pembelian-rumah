<x-layout-main>
    <h1>Pembelian rumah</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae necessitatibus error ut animi saepe totam assumenda illum repellendus consequatur voluptas in distinctio minus quidem excepturi, nostrum magnam inventore ullam consequuntur.</p>

    <ul>
        @foreach ($all_pembelian_rumah as $pembelian_rumah)
        <li>
            {{ $pembelian_rumah}}
        </li>
        @endforeach
    </ul>
</x-layout-main>
