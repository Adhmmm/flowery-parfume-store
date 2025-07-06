<x-app-layout title="Kriteria SPK">
    {{-- Header --}}
    <x-slot name="header">
        <nav class="bg-white w-full shadow-md rounded-md">
            <div class="flex justify-between items-center h-20 max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center gap-4 sm:gap-8">
                    <div class="bg-gradient-to-r from-violet-600 to-indigo-600 rounded-2xl py-3 px-3 ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                        </svg>

                    </div>
                    <div class="px-2 sm:-ml-4">
                        <h1 class="text-lg sm:text-xl lg:text-xl font-bold">
                            {{ __('SPK Criteria') }}
                        </h1>
                        <p class="text-sm sm:text-sm lg:text-sm font-normal text-gray-500">
                            {{ __('Manage parfume criteria') }}
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
    {{-- Content Border --}}
    <div class="flex-1 px-2 sm:px-6 lg:px-12 overflow-y-auto">
        <div class="bg-white p-6 pr-8 rounded-lg shadow-md">
            <div class="relative flex justify-between items-center mt-4 md:mt-0">
                <div>
                    <h1 class="text-lg sm:text-xl lg:text-xl font-bold">Criteria Management</h1>
                    <p class="text-sm sm:text-sm lg:text-sm font-normal text-gray-500">View, add, and manage the
                        criteria used for evaluating parfume products.</p>
                </div>
                {{-- Button Tambah Data --}}
                <div class="flex items-center justify-between gap-2 md:mt-0 mt-4">
                    <a href="#"
                        class="px-3 py-2 flex items-center justify-between font-medium tracking-wide capitalize transition-colors duration-600 transform text-gray-50 bg-gradient-to-r from-violet-400 to-pink-300 border border-gray-200 rounded-md hover:from-emerald-400 hover:to-cyan-500 hover:text-slate-50 shadow-md">
                        + Add New Data</a>
                </div>
            </div>
        </div>
        {{-- Form Kriteria --}}
        {{-- <form>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full mx-auto mt-6">
            <div>
                <label class="text-gray-800 font-semibold" for="kode">Kode Kriteria</label>
                <input type="text" id="kode" name="kode"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    placeholder="Masukkan kode kriteria">
            </div>
            <div>
                <label class="text-gray-800 font-semibold" for="nama">Nama Kriteria</label>
                <input type="text" id="nama" name="nama"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    placeholder="Masukkan nama kriteria">
            </div>
            <div>
                <label class="text-gray-800 font-semibold" for="bobot">Bobot Nilai</label>
                <input type="number" id="kriteria" name="kriteria" step="0.01" min="0" max="1"
                    value="0"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    placeholder="Masukkan bobot nilai">
            </div>
            <div>
                <label class="text-gray-800 font-semibold" for="jenis_kriteria">Jenis
                    Kriteria</label>
                <select name="jenis_kriteria" id="jenis_kriteria"
                    class="w-full px-4 py-2 bg-white border border-gray-300 dark-border-gray-400 rounded-md text-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-blue-300 sm:text-sm">
                    <option value="">-- Pilih Jenis Kriteria --</option>
                    <option value="benefit">Benefit</option>
                    <option value="cost">Cost</option>
                </select>
            </div>
            <div class="items-center justify-between mt-2">
                <button type="submit"
                    class="px-4 py-2 bg-white text-white rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">
                    Simpan
                </button>
                <button type="submit"
                    class="px-6 py-2 bg-white text-white rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">
                    Batal
                </button>
            </div>
        </div>
    </form> --}}

        {{-- Table Kriteria --}}
        <section class="container px-auto py-6 mx-auto">
            <div class="flex flex-col mt-6">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gradient-to-tr from-red-500 to-orange-500">
                                    <tr>
                                        <th scope="col"
                                            class="py-3.5 px-14 text-sm font-semibold uppercase text-left rtl:text-right text-neutral-50">
                                            <div class="flex items-center gap-x-3">
                                                <span>Kode</span>
                                            </div>
                                        </th>

                                        <th scope="col"
                                            class="py-3.5 px-16 text-sm font-semibold uppercase text-left rtl:text-right text-neutral-50">
                                            <div class="flex items-center gap-x-3">
                                                <span>Nama Kriteria</span>
                                            </div>
                                        </th>

                                        <th scope="col"
                                            class="py-3.5 px-12 text-sm font-semibold uppercase text-left rtl:text-right text-neutral-50">
                                            <div class="flex items-center gap-x-3">
                                                <span>Bobot</span>
                                            </div>
                                        </th>

                                        <th scope="col"
                                            class="py-3.5 px-16 text-sm font-semibold uppercase text-left rtl:text-right text-neutral-50">
                                            <div class="flex items-center gap-x-3">
                                                <span>Jenis</span>
                                            </div>
                                        </th>

                                        <th scope="col" class="relative py-3.5 px-20">
                                            <span class="sr-only">Edit</span>
                                        </th>

                                        <th scope="col"
                                            class="py-3.5 px-16 text-sm font-semibold uppercase text-left rtl:text-right text-neutral-50">
                                            <div class="flex items-center gap-x-3">
                                                <span>Aksi</span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-slate-200">
                                    <tr>
                                        <td class="px-16 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            <div class="inline-flex items-center gap-x-3">
                                                <div class="flex items-center gap-x-2">
                                                    <div>
                                                        <h2 class="font-bold text-base text-neutral-800">
                                                            C1
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-16 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            <h2 class="text-sm font-semibold capitalize text-gray-500">penjualan produk
                                            </h2>
                                        </td>
                                        <td class="px-14 py-4 text-sm font-semibold text-gray-500">
                                            0.25</td>
                                        <td class="px-16 py-4 text-sm font-semibold capitalize text-gray-500">
                                            benefit</td>
                                        <td class="relative py-3.5 px-4">
                                            <span class="sr-only">rp</span>
                                        </td>
                                        <td class="px-12 py-4 text-sm whitespace-nowrap">
                                            <div class="flex items-center gap-x-6">
                                                <button
                                                    class="text-gray-600 transition-colors duration-200 hover:text-red-500 focus:outline-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                    </svg>
                                                </button>

                                                <button
                                                    class="text-gray-600 transition-colors duration-200 hover:text-yellow-500 focus:outline-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
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
</x-app-layout>
