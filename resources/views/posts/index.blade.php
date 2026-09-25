<x-app-layout>
    <h1>Daftar Produk</h1>

    @foreach ($products as $product)
        <div>
            <p>{{ $product->name }}</p>
            <p>Stok: {{ $product->stock }}</p>

            <x-badge :stock="$product->stock" />
        </div>
    @endforeach
</x-app-layout>