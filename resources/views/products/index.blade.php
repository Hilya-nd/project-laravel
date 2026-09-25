<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Daftar Produk
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($products as $product)
                <div class="mb-4">
                    <p>{{ $product->name }}</p>
                    <p>Kode: {{ $product->code }}</p>
                    <p>Harga: {{ $product->price }}</p>
                    <p>Stok: {{ $product->stock }}</p>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>