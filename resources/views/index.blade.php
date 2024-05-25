<x-layout-base>
    <main>
        <h1>Pembelian rumah</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae necessitatibus error ut animi saepe totam assumenda illum repellendus consequatur voluptas in distinctio minus quidem excepturi, nostrum magnam inventore ullam consequuntur.</p>

        <ul>
            @foreach ($all_type_rumah as $type_rumah)
            <li>
                <span>
                    {{ $type_rumah->id_type }}
                </span>
                -
                <span>
                    {{ $type_rumah->type_rumah }}
                </span>
            </li>
            @endforeach
        </ul>
    </main>
</x-layout-base>
