<x-layouts.app>
    <section class="text-center py-16">
        <h2 class="text-3xl font-bold mb-6">Produk Terbaru</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4">
            @foreach ($produk as $item)
                <div class="bg-white shadow p-6 rounded">
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}"
                        class="w-full h-96 object-cover mb-4 rounded">
                    <h3 class="font-semibold">{{ $item->nama }}</h3>
                    <p class="text-sm text-gray-600">Rp{{ number_format($item->harga, 0, ',', '.') }}</p>
                </div>
            @endforeach
        </div>
    </section>
</x-layouts.app>
