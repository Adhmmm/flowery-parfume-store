<x-layout.app title="Dashboard">
    
    {{-- Header --}}
    <x-slot name="header">
        <h1 class="text-5xl font-bold">Dashboard Admin</h1>
        <p class=" text-gray-600 text-xl mt-2">Welcome to your dashboard!</p>
    </x-slot>

    {{-- Table Produk --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <!-- Card 1 -->
        <div class="bg-white border border-black rounded-md p-4">
            <div class="flex justify-between items-center text-base font-bold text-gray-500 uppercase">
                TOTAL ORDER
                <i class="fa-solid fa-square-up-right text-3xl"></i>
            </div>
            <div class="mt-4 text-2xl font-bold text-gray-900">650</div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white border border-black rounded-md p-4">
            <div class="flex justify-between items-center text-base font-bold text-gray-500 uppercase">
                PRODUCT SOLD
                <i class="fa-solid fa-square-up-right text-3xl"></i>
            </div>
            <div class="mt-4 text-2xl font-bold text-gray-900">1.088</div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white border border-black rounded-md p-4">
            <div class="flex justify-between items-center text-base font-bold text-gray-500 uppercase">
                REVENUE
                <i class="fa-solid fa-square-up-right text-3xl"></i>
            </div>
            <div class="mt-4 text-2xl font-bold text-gray-900">5.000.000</div>
        </div>
    </div>
    {{-- Stock Report --}}
    <section class="container px-auto py-auto mx-auto">
        <div class="container py-2 mx-auto">
            <h2 class="text-3xl font-bold">Stock Report</h2>
        </div>
        <div class="relative flex items-center mt-4 md:mt-0">
            <span class="absolute">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </span>

            <input type="text" placeholder="Search"
                class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-100 dark:text-gray-300 dark:border-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
        </div>

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
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between mt-6">
            <a href="#"
                class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-stone-50 dark:text-neutral-950 dark:border-gray-400 dark:hover:text-stone-50 dark:hover:bg-neutral-950">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                </svg>

                <span>
                    previous
                </span>
            </a>

            <div class="items-center hidden lg:flex gap-x-3">
                <a href="#"
                    class="px-2 py-1 text-sm text-stone-100 rounded-md dark:bg-gray-800 bg-blue-100/60">1</a>
                <a href="#"
                    class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:text-stone-100">2</a>
                <a href="#"
                    class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:text-stone-100">3</a>
                <span class="px-2 py-1 text-sm text-gray-950 rounded-md dark:text-gray-950">...</span>
                <span class="px-2 py-1 text-sm text-gray-950 rounded-md dark:text-gray-950">5</span>

            </div>

            <a href="#"
                class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-stone-50 dark:text-neutral-950 dark:border-gray-400 dark:hover:text-stone-50 dark:hover:bg-neutral-950">
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
