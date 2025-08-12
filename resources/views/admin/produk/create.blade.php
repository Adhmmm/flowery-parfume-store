<x-admin-layout title="Produk">
    {{-- Header --}}
    <x-slot name="header">
        <nav class="bg-white w-full shadow-sm rounded-none">
            <div class="flex justify-between items-center h-20 max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center gap-4 sm:gap-8">
                    <div class="bg-gradient-to-r from-violet-600 to-indigo-600 rounded-2xl py-3 px-3 ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                        </svg>
                    </div>
                    <div class="px-2 sm:-ml-4">
                        <h1 class="text-lg sm:text-xl lg:text-xl font-bold">
                            {{ __('Input Product') }}
                        </h1>
                        <p class="text-sm sm:text-sm lg:text-sm font-normal text-gray-500">
                            {{ __('Manage parfume products') }}
                        </p>
                    </div>
                </div>
            </div>
        </nav>
    </x-slot>

    <x-slot name="description">
        <p class="text-gray-600 text-xl">
            {{ __('') }}
        </p>
    </x-slot>

    <div class="flex-1 px-2 sm:px-6 lg:px-12 overflow-y-auto">
        <div class="bg-white p-6 pr-8 rounded-lg shadow-sm">
            <div class="relative flex justify-between items-center mt-4 md:mt-0">
                <div>
                    <h1 class="text-lg sm:text-lg lg:text-lg font-bold">{{ __('Tambah Produk Baru') }}</h1>
                    <p class="text-sm sm:text-sm lg:text-sm font-normal text-gray-500">
                        {{ __('Silahkan isi form untuk menambahkan produk parfum baru.') }}</p>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="mb-8 p-4 bg-red-100 border border-red-300 text-red-600 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-white p-6 mt-6 rounded-sm shadow-sm border border-gray-300">
            <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data"
                class="space-y-6">
                @csrf
                <div class="flex items-center justify-between gap-2 md:mt-0 mt-4">
                    <div class="w-full">
                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                            <input type="text" name="nama" id="nama" value="{{ old('nama') }}" placeholder="Masukkan nama produk"
                                class="mt-1 block w-full border border-gray-300 rounded-sm shadow-sm p-3 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-gray-400">
                        </div>
                    </div>
                    <div class="w-full">
                        <div>
                            <label for="jenis_aroma" class="block text-sm font-medium text-gray-700">Jenis Aroma</label>
                            <input type="text" name="jenis_aroma" id="jenis_aroma" value="{{ old('jenis_aroma') }}" placeholder="Masukkan jenis aroma"
                                class="mt-1 block w-full border border-gray-300 rounded-sm shadow-sm p-3 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-gray-400">
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between gap-2 md:mt-0 mt-4">
                    <div class="w-full">
                        <div>
                            <label for="rating_produk" class="block text-sm font-medium text-gray-700">Rating
                                Produk</label>
                            <input type="number" name="rating_produk" id="rating_produk"
                                value="{{ old('rating_produk') }}" step="0.1" min="0" max="10"
                                placeholder="Contoh: 4.5"
                                class="mt-1 block w-full border border-gray-300 rounded-sm shadow-sm p-3 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-gray-400">
                        </div>
                    </div>
                    <div class="w-full">
                        <div>
                            <label for="penjualan" class="block text-sm font-medium text-gray-700">Penjualan</label>
                            <input type="number" name="penjualan" id="penjualan" value="{{ old('penjualan') }}" placeholder="Masukkan jumlah penjualan"
                                class="mt-1 block w-full border border-gray-300 rounded-sm shadow-sm p-3 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-gray-400">
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between gap-2 md:mt-0 mt-4">
                    <div class="w-full">
                        <div>
                            <label for="harga" class="block text-sm font-medium text-gray-700">Harga Produk</label>
                            <input type="number" name="harga" id="harga" value="{{ old('harga') }}" placeholder="Masukkan harga produk"
                                class="mt-1 block w-full border border-gray-300 rounded-sm shadow-sm p-3 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-gray-400">
                        </div>
                    </div>
                    <div class="w-full">
                        <div>
                            <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar
                                (opsional)</label>
                            <input type="file" name="gambar" id="gambar"
                                class="mt-1 block w-full text-sm font-medium text-gray-400 border border-gray-300 rounded-sm p-2
                                file:bg-gray-100 file:text-gray-700
                                file:rounded-sm file:border-0 file:text-sm
                                file:font-semibold file:mr-4 file:py-2 file:px-3
                                hover:file:bg-gray-200">
                        </div>
                    </div>
                </div>

                <div class="flex justify-end gap-3">
                    <a href="{{ route('admin.produk.index') }}"
                        class="inline-block px-6 py-2 border border-gray-400 rounded-xl text-sm font-medium text-gray-600 hover:bg-gray-100 transition">
                        Cancel
                    </a>
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-xl shadow text-sm font-medium">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
