<x-layout.app title="Product">

    {{-- Header --}}
    <x-slot name='header'>
        <div class="py-auto">
            <h1 class="text-5xl font-bold text-gray-900">Daftar Product Parfum</h1>
            <p class="text-xl text-gray-500 mt-4 px-auto">Kelola produk parfum yang tersedia di toko</p>
        </div>
    </x-slot>

    {{-- Content Border --}}
    <div class="mt-4">
        <div class="bg-white dark:bg-gray-200 border p-4 pr-8 rounded-lg shadow-md">
            <p class="text-gray-500 font-medium text-xl">
                <span class="text-gray-800 text-xl font-bold">Informasi:</span>
                Halaman ini digunakan untuk mengelola daftar produk parfum yang tersedia di toko. Anda dapat
                menambahkan, mengedit, atau menghapus produk sesuai kebutuhan.
            </p>
        </div>
    </div>
    
    {{-- Search --}}
    <section class="container px-auto py-12 mx-auto">
        <div class="relative flex justify-between items-center mt-4 md:mt-0">
            <span class="absolute">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </span>

            <input type="text" placeholder="Search"
                class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-100 dark:text-gray-800 dark:border-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">

            {{-- Button Tambah Data --}}
            <div class="flex items-center justify-between gap-2 md:mt-0 mt-4">
                <a href="#"
                    class="px-4 py-1.5 flex items-center justify-between font-medium tracking-wide capitalize transition-colors duration-600 transform text-gray-50 bg-gradient-to-r from-violet-400 to-pink-300 border border-gray-200 rounded-lg dark:text-gray-50 dark:border-gray-400 hover:from-emerald-400 hover:to-cyan-500 hover:text-slate-50 focus:outline-none focus:ring focus:ring-slate-300 focus:ring-opacity-80">
                    + Tambah Data</a>
            </div>
        </div>

        {{-- Table Product --}}
        <div class="flex flex-col mt-6">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 dark:border-gray-400 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-400">
                            <thead class="bg-gray-50 dark:bg-gray-100">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 px-16 text-sm font-bold text-left rtl:text-right text-neutral-900 dark:text-neutral-900">
                                        <div class="flex items-center gap-x-3">
                                            <span>PRODUK</span>
                                        </div>
                                    </th>

                                    <th scope="col"
                                        class="py-3.5 px-20 text-sm font-bold text-left rtl:text-right text-neutral-900 dark:text-neutral-900">
                                        <div class="flex items-center gap-x-3">
                                            <span>SKU</span>
                                        </div>
                                    </th>

                                    <th scope="col"
                                        class="py-3.5 px-16 text-sm font-bold text-left rtl:text-right text-neutral-900 dark:text-neutral-900">
                                        <div class="flex items-center gap-x-3">
                                            <span>KATEGORI</span>
                                        </div>
                                    </th>

                                    <th scope="col"
                                        class="py-3.5 px-14 text-sm font-bold text-left rtl:text-right text-neutral-900 dark:text-neutral-900">
                                        <div class="flex items-center gap-x-3">
                                            <span>STOK</span>
                                        </div>
                                    </th>

                                    <th scope="col"
                                        class="py-3.5 px-16 text-sm font-bold text-left rtl:text-right text-neutral-900 dark:text-neutral-900">
                                        <div class="flex items-center gap-x-3">
                                            <span>HARGA</span>
                                        </div>
                                    </th>

                                    <th scope="col" class="relative py-3.5 px-4">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200 dark:divide-slate-200 dark:bg-slate-50">
                                <tr>
                                    <td class="px-14 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <div class="flex items-center gap-x-2">
                                                <img class="object-cover w-10 h-10 rounded-full"
                                                    src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                                    alt="">
                                                <div>
                                                    <h2 class="font-medium text-neutral-800 dark:text-neutral">Rose
                                                        Garden
                                                    </h2>
                                                    <p class="text-sm font-normal text-gray-600 dark:text-gray-400">
                                                        50ml</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-14 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <h2 class="text-sm font-semibold text-gray-500">FP-RGN-001</h2>
                                    </td>
                                    <td class="px-16 py-4 text-sm font-semibold text-gray-500">
                                        Parfume</td>
                                    <td class="px-16 py-4 text-sm font-semibold text-gray-500">
                                        75</td>
                                    <td class="px-14 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <p class="px-3 py-1 text-sm font-semibold text-gray-500">
                                                19.000</p>
                                        </div>
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
                                    <td class="px-14 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <div class="flex items-center gap-x-2">
                                                <img class="object-cover w-10 h-10 rounded-full"
                                                    src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                                                    alt="">
                                                <div>
                                                    <h2 class="font-medium text-neutral-800 dark:text-neutral">Jasmine
                                                        Bloom</h2>
                                                    <p class="text-sm font-normal text-gray-600 dark:text-gray-400">
                                                        30ml</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-14 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <h2 class="text-sm font-semibold text-gray-500">FP-JBM-002</h2>
                                    </td>
                                    <td class="px-16 py-4 text-sm font-semibold text-gray-500">
                                        Parfume</td>
                                    <td class="px-16 py-4 text-sm font-semibold text-gray-500">
                                        32</td>
                                    <td class="px-14 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <p class="px-3 py-1 text-sm font-semibold text-gray-500">
                                                29.900</p>
                                        </div>
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
                                    <td class="px-14 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <div class="flex items-center gap-x-2">
                                                <img class="object-cover w-10 h-10 rounded-full"
                                                    src="https://images.unsplash.com/photo-1608174386344-80898cec6beb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                                                    alt="">
                                                <div>
                                                    <h2 class="font-medium text-neutral-800 dark:text-neutral">Lavender
                                                        Dream</h2>
                                                    <p class="text-sm font-normal text-gray-600 dark:text-gray-400">
                                                        75ml</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-14 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <h2 class="text-sm font-semibold text-gray-500">FP-LDM-003</h2>
                                    </td>
                                    <td class="px-16 py-4 text-sm font-semibold text-gray-500">
                                        Parfume</td>
                                    <td class="px-16 py-4 text-sm font-semibold text-gray-500">
                                        23</td>
                                    <td class="px-14 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <p class="px-3 py-1 text-sm font-semibold text-gray-500">
                                                89.900</p>
                                        </div>
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
                                    <td class="px-14 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <div class="flex items-center gap-x-2">
                                                <img class="object-cover w-10 h-10 rounded-full"
                                                    src="https://images.unsplash.com/photo-1488508872907-592763824245?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                                    alt="">
                                                <div>
                                                    <h2 class="font-medium text-neutral-800 dark:text-neutral">Royal
                                                        Rose</h2>
                                                    <p class="text-sm font-normal text-gray-600 dark:text-gray-400">
                                                        50ml</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-14 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <h2 class="text-sm font-semibold text-gray-500">FP-RRE-004</h2>
                                    </td>
                                    <td class="px-16 py-4 text-sm font-semibold text-gray-500">
                                        Parfume</td>
                                    <td class="px-16 py-4 text-sm font-semibold text-gray-500">
                                        19</td>
                                    <td class="px-14 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <p class="px-3 py-1 text-sm font-semibold text-gray-500">
                                                38.900</p>
                                        </div>
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
                                    <td class="px-14 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <div class="flex items-center gap-x-2">
                                                <img class="object-cover w-10 h-10 rounded-full"
                                                    src="https://images.unsplash.com/photo-1499470932971-a90681ce8530?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                                    alt="">
                                                <div>
                                                    <h2 class="font-medium text-neutral-800 dark:text-neutral">Cheeery
                                                        Blosoom</h2>
                                                    <p class="text-sm font-normal text-gray-600 dark:text-gray-400">
                                                        30ml</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-14 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <h2 class="text-sm font-semibold text-gray-500">FP-CBM-005</h2>
                                    </td>
                                    <td class="px-16 py-4 text-sm font-semibold text-gray-500">
                                        Parfume</td>
                                    <td class="px-16 py-4 text-sm font-semibold text-gray-500">
                                        29</td>
                                    <td class="px-14 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <p class="px-3 py-1 text-sm font-semibold text-gray-500">
                                                32.500</p>
                                        </div>
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
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </a>
        </div>
    </section>
</x-layout.app>
