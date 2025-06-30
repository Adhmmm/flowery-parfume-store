<x-layout.app title="Kriteria SPK" :active="request()->routeIs('admin.kriteria')">
    {{-- Header --}}
    <x-slot name='header'>
        <div class="mb-6">
            <h2 class="text-5xl font-bold text-gray-950">Daftar Kriteria</h2>
            <p class="text-xl text-gray-500 mt-4 px-auto">Kelola kriteria untuk penilaian parfum</p>
        </div>
    </x-slot>

    {{-- Content Border --}}
    <div class="mt-4">
        <div class="bg-white dark:bg-gray-200 border p-4 pr-8 rounded-lg shadow-md">
            <p class="text-gray-500 font-medium text-xl">
                <span class="text-gray-800 text-xl font-bold">Informasi:</span>
                Halaman ini digunakan untuk mengelola kriteria yang digunakan dalam sistem penilaian SPK. Anda dapat
                menambahkan, mengedit, atau menghapus kriteria sesuai kebutuhan.
            </p>
        </div>
    </div>

    {{-- Form Kriteria --}}
    {{-- <form>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full mx-auto mt-6">
            <div>
                <label class="text-gray-800 dark:text-gray-800 font-semibold" for="kode">Kode Kriteria</label>
                <input type="text" id="kode" name="kode"
                    class="mt-1 block w-full px-3 py-2 bg-white dark:bg-gray-100 border border-gray-300 dark:border-gray-400 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    placeholder="Masukkan kode kriteria">
            </div>
            <div>
                <label class="text-gray-800 dark:text-gray-800 font-semibold" for="nama">Nama Kriteria</label>
                <input type="text" id="nama" name="nama"
                    class="mt-1 block w-full px-3 py-2 bg-white dark:bg-gray-100 border border-gray-300 dark:border-gray-400 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    placeholder="Masukkan nama kriteria">
            </div>
            <div>
                <label class="text-gray-800 dark:text-gray-800 font-semibold" for="bobot">Bobot Nilai</label>
                <input type="number" id="kriteria" name="kriteria" step="0.01" min="0" max="1"
                    value="0"
                    class="mt-1 block w-full px-3 py-2 bg-white dark:bg-gray-100 border border-gray-300 dark:border-gray-400 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    placeholder="Masukkan bobot nilai">
            </div>
            <div>
                <label class="text-gray-800 dark:text-gray-800 font-semibold" for="jenis_kriteria">Jenis
                    Kriteria</label>
                <select name="jenis_kriteria" id="jenis_kriteria"
                    class="w-full px-4 py-2 bg-white dark:bg-gray-100 border border-gray-300 dark-border-gray-400 rounded-md text-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-blue-300 sm:text-sm">
                    <option value="">-- Pilih Jenis Kriteria --</option>
                    <option value="benefit">Benefit</option>
                    <option value="cost">Cost</option>
                </select>
            </div>
            <div class="items-center justify-between mt-2">
                <button type="submit"
                    class="px-4 py-2 bg-white dark:bg-gray-500 text-white rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">
                    Simpan
                </button>
                <button type="submit"
                    class="px-6 py-2 bg-white dark:bg-gray-500 text-white rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">
                    Batal
                </button>
            </div>
        </div>
    </form> --}}

    {{-- Table Kriteria --}}
    <section class="container px-auto py-6 mx-auto">
        <div class="relative flex justify-between items-center mt-4 md:mt-0">
            {{-- Button Tambah Data --}}
            <div class="flex items-center justify-between gap-2 md:mt-0 mt-4">
                <a href="#"
                    class="px-4 py-1.5 flex items-center justify-between font-medium tracking-wide capitalize transition-colors duration-600 transform text-gray-50 bg-gradient-to-r from-violet-400 to-pink-300 border border-gray-200 rounded-lg dark:text-gray-50 dark:border-gray-400 hover:from-emerald-400 hover:to-cyan-500 hover:text-slate-50 focus:outline-none focus:ring focus:ring-slate-300 focus:ring-opacity-80">
                    + Tambah Data</a>
            </div>
        </div>
        <div class="flex flex-col mt-6">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 dark:border-gray-400 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-400">
                            <thead class="bg-gray-50 dark:bg-gray-100">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 px-14 text-sm font-bold uppercase text-left rtl:text-right text-neutral-900 dark:text-neutral-900">
                                        <div class="flex items-center gap-x-3">
                                            <span>kode</span>
                                        </div>
                                    </th>

                                    <th scope="col"
                                        class="py-3.5 px-auto text-sm font-bold uppercase text-left rtl:text-right text-neutral-900 dark:text-neutral-900">
                                        <div class="flex items-center gap-x-3">
                                            <span>nama kriteria</span>
                                        </div>
                                    </th>

                                    <th scope="col"
                                        class="py-3.5 px-auto text-sm font-bold uppercase text-left rtl:text-right text-neutral-900 dark:text-neutral-900">
                                        <div class="flex items-center gap-x-3">
                                            <span>bobot</span>
                                        </div>
                                    </th>

                                    <th scope="col"
                                        class="py-3.5 px-auto text-sm font-bold uppercase text-left rtl:text-right text-neutral-900 dark:text-neutral-900">
                                        <div class="flex items-center gap-x-3">
                                            <span>jenis</span>
                                        </div>
                                    </th>

                                    <th scope="col" class="relative py-3.5 px-4">
                                        <span class="sr-only">Edit</span>
                                    </th>

                                    <th scope="col"
                                        class="py-3.5 px-16 text-sm font-bold uppercase text-left rtl:text-right text-neutral-900 dark:text-neutral-900">
                                        <div class="flex items-center gap-x-3">
                                            <span>aksi</span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200 dark:divide-slate-200 dark:bg-slate-50">
                                <tr>
                                    <td class="px-16 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <div class="flex items-center gap-x-2">
                                                <div>
                                                    <h2 class="font-bold text-base text-neutral-800 dark:text-neutral">
                                                        C1
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-auto py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <h2 class="text-sm font-semibold capitalize text-gray-500">penjualan produk</h2>
                                    </td>
                                    <td class="px-2 py-4 text-sm font-semibold text-gray-500">
                                        0.25</td>
                                    <td class="px-auto py-4 text-sm font-semibold capitalize text-gray-500">
                                        benefit</td>
                                    <td class="relative py-3.5 px-4">
                                        <span class="sr-only">rp</span>
                                    </td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button
                                                class="text-gray-600 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-500 hover:text-red-500 focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </button>

                                            <button
                                                class="text-gray-600 transition-colors duration-200 dark:hover:text-yellow-500 dark:text-gray-500 hover:text-yellow-500 focus:outline-none">
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

                                <tr>
                                    <td class="px-16 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <div class="flex items-center gap-x-2">
                                                <div>
                                                    <h2 class="font-bold text-base text-neutral-800 dark:text-neutral">
                                                        C2</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-auto py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <h2 class="text-sm font-semibold capitalize text-gray-500">rating produk</h2>
                                    </td>
                                    <td class="px-3 py-4 text-sm font-semibold text-gray-500">
                                        0.50</td>
                                    <td class="px-auto py-4 text-sm font-semibold capitalize text-gray-500">
                                        benefit</td>
                                    <td class="relative py-3.5 px-4">
                                        <span class="sr-only">rp</span>
                                    </td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button
                                                class="text-gray-600 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-500 hover:text-red-500 focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </button>

                                            <button
                                                class="text-gray-600 transition-colors duration-200 dark:hover:text-yellow-500 dark:text-gray-500 hover:text-yellow-500 focus:outline-none">
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

                                <tr>
                                    <td class="px-16 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <div class="flex items-center gap-x-2">
                                                <div>
                                                    <h2 class="font-bold text-base text-neutral-800 dark:text-neutral">
                                                        C3
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-auto py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <h2 class="text-sm font-semibold capitalize text-gray-500">harga produk</h2>
                                    </td>
                                    <td class="px-3 py-4 text-sm font-semibold text-gray-500">
                                        0.25</td>
                                    <td class="px-auto py-4 text-sm font-semibold capitalize text-gray-500">
                                        benefit</td>
                                    <td class="relative py-3.5 px-4">
                                        <span class="sr-only">rp</span>
                                    </td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button
                                                class="text-gray-600 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-500 hover:text-red-500 focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </button>

                                            <button
                                                class="text-gray-600 transition-colors duration-200 dark:hover:text-yellow-500 dark:text-gray-500 hover:text-yellow-500 focus:outline-none">
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
            class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-stone-50 dark:text-neutral-950 dark:border-gray-400 dark:hover:text-stone-50 dark:hover:bg-slate-950">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
            </svg>

            <span>
                previous
            </span>
        </a>

        <div class="items-center hidden lg:flex gap-x-3">
            <a href="#" class="px-2 py-1 text-sm text-stone-100 rounded-md dark:bg-slate-950">1</a>
            <a href="#"
                class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-slate-950 dark:text-gray-300 hover:text-stone-100">2</a>
            <a href="#"
                class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-slate-950 dark:text-gray-300 hover:text-stone-100">3</a>
            <span class="px-2 py-1 text-sm text-gray-950 rounded-md dark:text-gray-950">...</span>
            <span class="px-2 py-1 text-sm text-gray-950 rounded-md dark:text-gray-950">5</span>

        </div>

        <a href="#"
            class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-stone-50 dark:text-neutral-950 dark:border-gray-400 dark:hover:text-stone-50 dark:hover:bg-slate-950">
            <span>
                Next
            </span>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>
        </a>
    </div>
</x-layout.app>
