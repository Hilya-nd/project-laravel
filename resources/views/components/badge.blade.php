<div>
    @php
        if ($stock <= 0) {
            $label = 'Stok Habis';
            $color = 'bg-red-100 text-red-800';
        } elseif ($stock < 10) {
            $label = 'Stok Menipis';
            $color = 'bg-yellow-100 text-yellow-800';
        } else {
            $label = 'Stok Aman';
            $color = 'bg-green-100 text-green-800';
        }
    @endphp

    <span class="px-2 py-1 rounded text-sm font-semibold {{ $color }}">
        {{ $label }}
    </span>
</div>