<x-admin-layout title="Hasil SAW">
    <x-slot name="header">
        <nav class="bg-white w-full shadow-sm rounded-none">
            <div class="flex justify-between items-center h-20 max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center gap-4 sm:gap-8">
                    <div class="bg-gradient-to-r from-violet-600 to-indigo-600 rounded-2xl py-3 px-3 ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 text-white">
                            <path fill-rule="evenodd"
                                d="M4.125 3C3.089 3 2.25 3.84 2.25 4.875V18a3 3 0 0 0 3 3h15a3 3 0 0 1-3-3V4.875C17.25 3.839 16.41 3 15.375 3H4.125ZM12 9.75a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5H12Zm-.75-2.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5H12a.75.75 0 0 1-.75-.75ZM6 12.75a.75.75 0 0 0 0 1.5h7.5a.75.75 0 0 0 0-1.5H6Zm-.75 3.75a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5H6a.75.75 0 0 1-.75-.75ZM6 6.75a.75.75 0 0 0-.75.75v3c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-3A.75.75 0 0 0 9 6.75H6Z"
                                clip-rule="evenodd" />
                            <path d="M18.75 6.75h1.875c.621 0 1.125.504 1.125 1.125V18a1.5 1.5 0 0 1-3 0V6.75Z" />
                        </svg>

                    </div>
                    <div class="px-2 sm:-ml-4">
                        <h1 class="text-lg sm:text-xl lg:text-xl font-bold">
                            {{ __('Results SAW') }}
                        </h1>
                        <p class="text-sm sm:text-sm lg:text-sm font-normal text-gray-500">
                            {{ __('Ranking of SAW calculation results') }}
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
                    <h1 class="text-lg sm:text-xl lg:text-xl font-bold">{{ __('SAW Score Results') }}</h1>
                    <p class="text-sm sm:text-sm lg:text-sm font-normal text-gray-500">
                        {{ __('Ranking of alternatives based on SAW method') }}</p>
                </div>
            </div>
        </div>

        @if (session('success'))
            <div class="fixed top-6 left-1/2 transform -translate-x-1/2 z-50 bg-green-100 border border-green-300 text-green-700 rounded shadow-lg px-6 py-4 flex items-center gap-2 animate-fade-in"
                x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition>
                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
                <span>{{ session('success') }}</span>
                <button @click="show = false" class="ml-4 text-green-700 hover:text-green-900 focus:outline-none">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        @endif

        <section class="container px-auto py-6 mx-auto">
            <div class="flex flex-col">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="flex justify-between items-center mb-4 ml-4">
                            <h2 class="text-lg font-semibold">Normalisasi Matriks Keputusan</h2>
                        </div>
                        <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gradient-to-r from-blue-500 to-purple-500 text-white">
                                    <tr>
                                        <th scope="col"
                                            class="py-3.5 px-16 text-sm font-semibold capitalize text-left rtl:text-right text-neutral-50">
                                            <div class="flex items-center gap-x-3">
                                                <span>Produk</span>
                                                @foreach ($kriterias as $kriteria)
                                        <th scope="col"
                                            class="py-3.5 px-6 text-sm font-semibold capitalize text-neutral-50">
                                            <span>{{ $kriteria->nama_kriteria }}</span>
                                        </th>
                                        @endforeach
                                        <th scope="col"
                                            class="py-3.5 px-12 text-center text-sm font-semibold capitalize text-neutral-50">
                                            <span>Skor Total</span>
                                        </th>
                        </div>
                        </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-slate-200">
                            @foreach ($hasilSaw as $row)
                                <tr>
                                    <td class="px-8 py-4 text-sm">
                                        <div class="flex items-center gap-x-2">
                                            <img class="w-10 h-10 rounded-md"
                                                src="{{ $row->produk->gambar ? asset('storage/' . $row->produk->gambar) : asset('images/default.png') }}"
                                                onerror="this.onerror=null;this.src='{{ asset('images/default.png') }}';" />
                                            <div>
                                                <h2 class="font-semibold">{{ $row->produk->nama }}</h2>
                                                <p class="text-sm text-gray-500">30ml</p>
                                            </div>
                                        </div>
                                    </td>
                                    @foreach ($kriterias as $kriteria)
                                        <td class="px-32 py-4 text-sm text-center">
                                            {{ number_format($normalisasi[$row->produk_id][$kriteria->id], 2) }}</td>
                                    @endforeach
                                    <td class="px-16 py-2 text-sm text-center">
                                        <div
                                            class="inline-flex items-center px-5 py-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white text-xs rounded-full">
                                            {{ number_format($row->skor, 2) }}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>

                <div class="inline-block w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="flex justify-between items-center mb-4 ml-4">
                        <h2 class="text-lg font-semibold">Ranking Produk Berdasarkan Skor SAW</h2>
                    </div>
                    <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gradient-to-r from-blue-500 to-purple-500 text-white">
                                <tr>
                                    <th scope="col" class="py-3.5 px-16 text-sm font-semibold capitalize text-left">
                                        Produk</th>
                                    <th scope="col" class="py-3.5 px-6 text-sm font-semibold capitalize text-center">
                                        Ranking</th>
                                    <th scope="col" class="py-3.5 px-6 text-sm font-semibold capitalize text-center">
                                        Skor Total</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                @foreach ($hasilSaw as $row)
                                    <tr class="bg-white">
                                        <td class="px-8 py-4 text-sm text-left">
                                            <div class="flex items-center gap-x-2">
                                                <img class="w-10 h-10 rounded-md"
                                                    src="{{ $row->produk->gambar ? asset('storage/' . $row->produk->gambar) : asset('images/default.png') }}"
                                                    onerror="this.onerror=null;this.src='{{ asset('images/default.png') }}';" />
                                                <div>
                                                    <h2 class="font-semibold">{{ $row->produk->nama }}</h2>
                                                    <p class="text-sm text-gray-500">30ml</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-center">{{ $row->rank }}</td>
                                        <td class="px-6 py-4 text-sm text-center">
                                            <div
                                                class="inline-flex items-center px-5 py-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white text-xs rounded-full">
                                                {{ number_format($row->skor, 2) }}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
</x-admin-layout>
