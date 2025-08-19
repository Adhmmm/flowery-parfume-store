<x-admin-layout title="Create Nilai Kriteria">
    <x-slot name="header">
        <nav class="bg-white w-full shadow-sm rounded-none">
            <div class="flex justify-between items-center h-20 max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center gap-4 sm:gap-8">
                    <div class="bg-gradient-to-r from-violet-600 to-indigo-600 rounded-2xl py-3 px-3 ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                    </div>
                    <div class="px-2 sm:-ml-4">
                        <h1 class="text-lg sm:text-xl lg:text-xl font-bold">
                            {{ __('Input Nilai Kriteria') }}
                        </h1>
                        <p class="text-sm sm:text-sm lg:text-sm font-normal text-gray-500">
                            {{ __('Manage nilai kriteria') }}
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
            <div class="relative flex-justify-between items-center mt-4 md:mt-0">
                <div>
                    <h1 class="text-lg sm:text-lg lg:text-lg font-bold">{{ __('Input Nilai Kriteria') }}</h1>
                    <p class="text-sm sm:text-sm lg:text-sm font-normal text-gray-500">
                        {{ __('Silahkan isi form untuk menambahkan nilai kriteria baru.') }}</p>
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

        <div class="bg-white p-6 mt-6 rounded-sm shadow-sm border border-gray-300 max-w-3xl">
            <form action="{{ route('alternatif.store') }}" method="POST" enctype="multipart/form-data"
                class="space-y-6">
                @csrf
                <div class="items-center justify-between md:mt-0 mt-4">
                    <div class="w-full">
                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                            <select name="produk_id" id="produk_id" required
                                class="mt-1 block w-full border border-gray-300 rounded-sm shadow-sm p-3 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-gray-400">
                                @foreach ($produks as $produk)
                                    <option value="{{ $produk->id }}">{{ $produk->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="w-full">
                        <div>
                            <label for="nama_kriteria" class="block text-sm font-medium text-gray-700 mt-4">
                                Kriteria</label>
                            <select name="kriteria_id" id="kriteria_id" required
                                class="mt-1 block w-full border border-gray-300 rounded-sm shadow-sm p-3 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-gray-400">
                                <option value="">-- Pilih Kriteria --</option>
                                @foreach ($kriterias as $kriteria)
                                    <option value="{{ $kriteria->id }}">
                                        {{ $kriteria->nama_kriteria }} (Bobot: {{ $kriteria->bobot }})
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="w-full">
                        <div>
                            <label for="nilai" class="block text-sm font-medium text-gray-700 mt-4">Nilai</label>
                            <input type="number" name="nilai" id="nilai" step="0.1" min="0"
                                placeholder="Masukkan nilai" required
                                class="mt-1 block w-full border border-gray-300 rounded-sm shadow-sm p-3 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-gray-400">
                        </div>
                    </div>
                </div>

                <div class="flex justify-end gap-3 mt-6">
                    <a href="{{ route('alternatif.index') }}"
                        class="inline-block px-6 py-2 border border-gray-400 rounded-xl text-sm font-medium text-gray-600 hover:bg-gray-100 transition">
                        {{ __('Cancel') }}
                    </a>
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-xl shadow text-sm font-medium">
                        {{ __('Save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
