<x-customer-layout>
    <header class="mx-auto px-4 md:px-48 text-center md:text-left  py-20 md:py-40 w-full">
        <h1 class="text-lg md:text-3xl font-bold">All Products</h1>
    </header>

    <section class="mx-auto px-4 md:px-24 lg:px-48 flex flex-col lg:flex-row gap-8 mb-8">
        <aside class="w-full lg:w-1/4">
            <form action="{{ route('customer.catalog') }}" method="GET">
                @csrf
                @method('GET')

                <fieldset class="p-3">
                    <legend class="uppercase font-medium text-xl">Select Categories</legend>

                    <div class="flex flex-col items-start gap-3">
                        <label for="floral" class="inline-flex items-center gap-3">
                            <input type="checkbox" class="size-5 rounded border-gray-300 shadow-sm" id="floral" />

                            <span class="text-base text-gray-700">Floral</span>
                        </label>

                        <label for="fruity" class="inline-flex items-center gap-3">
                            <input type="checkbox" class="size-5 rounded border-gray-300 shadow-sm" id="fruity" />

                            <span class="text-base text-gray-700">Fruity</span>
                        </label>

                        <label for="oriental" class="inline-flex items-center gap-3">
                            <input type="checkbox" class="size-5 rounded border-gray-300 shadow-sm" id="oriental" />

                            <span class="text-base text-gray-700">Oriental</span>
                        </label>

                        <label for="wood" class="inline-flex items-center gap-3">
                            <input type="checkbox" class="size-5 rounded border-gray-300 shadow-sm" id="wood" />

                            <span class="text-base text-gray-700">Wood</span>
                        </label>

                        <label for="fresh" class="inline-flex items-center gap-3">
                            <input type="checkbox" class="size-5 rounded border-gray-300 shadow-sm" id="fresh" />

                            <span class="text-base text-gray-700">Fresh</span>
                        </label>
                    </div>
                </fieldset>
            </form>
        </aside>

        <div class="flex-1">
            <div class=" grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($produk as $item)
                    <a href="#" class="group block overflow-hidden  border">
                        <img alt="{{ $item['nama'] }}" src="{{ $item['image'] }}"
                            class="md:h-80 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72" />

                        <div class="relative border border-gray-100 bg-white p-6">
                            <span
                                class="bg-black px-3 py-1.5 text-xs text-white font-medium whitespace-nowrap">{{ $item['kategori'] }}</span>

                            <h3 class="mt-4 text-xl font-medium text-gray-900">{{ $item['nama'] }}</h3>

                            <p class="mt-1.5 text-sm text-gray-700">Rp {{ number_format($item['harga'], 0, ',', '.') }}
                            </p>

                            <div class="flex justify-between mt-6 text-gray-700">
                                <div class="flex items-center">
                                    <small>{{ $item['penjualan'] }} Terjual</small>
                                </div>
                                <div class="flex items-center gap-x-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="size-5 text-yellow-500">
                                        <path fill-rule="evenodd"
                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                            clip-rule="evenodd" />
                                    </svg>

                                    <small>{{ $item['rating'] }}</small>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
</x-customer-layout>
