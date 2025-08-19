<x-admin-layout title="Penilaian Alternatif">
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
                            {{ __('Nilai Kriteria') }}
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
            <div class="relative flex justify-between items-center mt-4 md:mt-0">
                <div>
                    <h1 class="text-lg sm:text-xl lg:text-xl font-bold">{{ __('Nilai Kriteria Management') }}</h1>
                    <p class="text-sm sm:text-sm lg:text-sm font-normal text-gray-500">
                        {{ __('Manage nilai kriteria for evaluating normalisasi') }}</p>
                </div>

                <div class="flex items-center justify-between gap-2 md:mt-0 mt-4">
                    <a href="{{ route('alternatif.create') }}"
                        class="px-3 py-2 flex items-center justify-between font-medium tracking-wide capitalize transition-colors duration-600 transform text-gray-50 bg-gradient-to-r from-violet-400 to-pink-300 border border-gray-200 rounded-md hover:from-emerald-400 hover:to-cyan-500 hover:text-slate-50 shadow-sm">
                        + Add New Data</a>
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
            <div class="flex flex-col mt-6">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gradient-to-tr from-fuchsia-500 to-pink-500">
                                    <tr>
                                        <th scope="col"
                                            class="py-3 px-16 text-sm font-semibold capitalize text-left rtl:text-right text-neutral-50">
                                            <div class="flex items-center gap-x-3">
                                                <span>Nama Produk</span>
                                            </div>
                                        </th>

                                        @foreach ($kriterias as $kriteria)
                                            <th scope="col"
                                                class="py-3.5 px-6 text-sm font-semibold capitalize text-neutral-50">
                                                <div class="flex items-center gap-x-3">
                                                    <span>{{ $kriteria->nama_kriteria }}
                                                        <br>(Bobot : {{ $kriteria->bobot }})</span>
                                                </div>
                                            </th>
                                        @endforeach

                                        <th scope="col" class="relative py-3.5 px-20">
                                            <span class="sr-only">Edit</span>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-slate-200">
                                    @foreach ($produks as $produk)
                                        <tr>
                                            <td class="px-8 py-4 text-sm">
                                                <div class="flex items-center gap-x-2">
                                                    <img class="w-10 h-10 rounded-md"
                                                        src="{{ $produk->gambar ? asset('storage/' . $produk->gambar) : asset('images/default.png') }}"
                                                        onerror="this.onerror=null;this.src='{{ asset('images/default.png') }}';" />
                                                    <div>
                                                        <h2 class="font-semibold">{{ $produk->nama }}</h2>
                                                        <p class="text-sm text-gray-500">30ml</p>
                                                    </div>
                                                </div>
                                            </td>
                                            @foreach ($kriterias as $kriteria)
                                                <td class="px-16 py-4 text-sm whitespace-nowrap">
                                                    {{ $data[$produk->id][$kriteria->id] ?? '-' }}
                                                </td>
                                            @endforeach
                                            <td class="px-12 py-4 text-sm whitespace-nowrap">
                                                <div class="flex items-center gap-x-6">
                                                    <form action="{{ route('alternatif.destroy', $produk->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus kriteria ini?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="text-gray-600 mt-1 hover:text-red-500 transition-colors duration-200 focus:outline-none"
                                                            title="Hapus Produk">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-5 h-5">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                            </svg>
                                                        </button>
                                                    </form>

                                                    <a href="{{ route('alternatif.edit', $produk->id) }}"
                                                        class="text-gray-600 hover:text-yellow-500 transition-colors duration-200 focus:outline-none"
                                                        title="Edit Produk">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                        </svg>
                                                    </a>
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

        <div class="flex items-center justify-between mt-6">
            <a href="#"
                class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                </svg>

                <span>
                    previous
                </span>
            </a>

            <div class="flex flex-wrap justify-center items-center gap-2 text-sm">
                <a href="#" class="px-2 py-1 bg-blue-100 text-blue-800 rounded">1</a>
                <a href="#" class="px-2 py-1 hover:bg-blue-100 hover:text-blue-800 text-gray-900 rounded">2</a>
                <a href="#" class="px-2 py-1 hover:bg-blue-100 hover:text-blue-800 text-gray-900 rounded">3</a>
                <span class="px-2 py-1 text-sm text-gray-950 rounded-md">...</span>
                <a href="#" class="px-2 py-1 hover:bg-blue-100 hover:text-blue-800 text-gray-900 rounded">5</a>
            </div>

            <a href="#"
                class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100">
                <span>
                    Next
                </span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </a>
        </div>
    </div>
</x-admin-layout>
