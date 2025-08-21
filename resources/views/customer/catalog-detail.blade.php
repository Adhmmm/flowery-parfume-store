<x-customer-layout>
    <section class="mx-auto px-4 md:px-24 lg:px-48 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            {{-- Gambar Produk --}}
            <div>
                <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama }}"
                    class="w-[700px] h-[700px] rounded-lg object-cover shadow-lg">
            </div>

            {{-- Info Produk --}}
            <div>
                <h1 class="text-4xl font-bold mb-4">{{ $produk->nama }}</h1>
                <p class="text-2xl font-semibold text-gray-600 mb-8">Rp
                    {{ number_format($produk->harga, 0, ',', '.') }}
                </p>

                <p class="text-lg text-gray-600 mb-2">Aroma: <span class="font-semibold">{{ $produk->jenis_aroma }}</span>
                </p>
                <p class="text-lg text-gray-600 mb-2">Rating: ⭐ {{ $produk->rating_produk }}</p>
                <p class="text-lg text-gray-600 mb-2">Terjual: {{ $produk->penjualan }}</p>

                <a href="{{ route('customer.catalog') }}"
                    class="inline-block mt-6 px-6 py-3 bg-black text-white rounded-lg hover:bg-black/80">
                    Kembali
                </a>
            </div>
        </div>
    </section>
</x-customer-layout>
