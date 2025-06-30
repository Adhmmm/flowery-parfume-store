<aside
    class="flex flex-col w-full md:w-64 h-screen p-4 px-6 py-12 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-white-500 dark:border-neutral-500">
    <a href="#">
        <img class="w-20 h-auto mx-auto sm:h-7" src="{{ asset('images/parfume.jpg') }}" alt="img">
    </a>
    <div class="flex flex-col justify-between flex-1 mt-12">
        <nav>
            <a class="flex items-center px-4 py-2 mt-5 {{ request()->routeIs('admin.dashboard') ? 'bg-white dark:bg-gray-950 text-white dark:text-gray-100' : 'text-gray-50 hover:text-gray-900' }} text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-neutral-950 dark:hover:text-slate-50 hover:text-gray-50"
                href="{{ route('admin.dashboard') }}">
                <i class="fa-solid fa-house-user"></i>

                <span class="mx-4 font-medium">Dashboard</span>
            </a>

            <a class="flex items-center px-4 py-2 mt-5 {{ request()->routeIs('admin.products') ? 'bg-white dark:bg-gray-950 text-white dark:text-gray-100' : 'text-gray-50 hover:text-gray-900' }} text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-neutral-950 dark:hover:text-slate-50 hover:text-gray-50"
                href="{{ route('admin.products') }}">
                <i class="fa-solid fa-store"></i>

                <span class="mx-4 font-medium">Produk</span>
            </a>
            <div x-data="{ open: {{ request()->is('admin/spk*') ? 'true' : 'false' }} }" class="space-y-1">
                <button @click="open = !open"
                    class="flex items-center px-4 py-2 mt-5 focus:outline-none text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-neutral-950 dark:hover:text-slate-50 hover:text-gray-50"
                    :class="open ? 'bg-gray-200' : ''">
                    <i class="fa-solid fa-envelope-open-text"></i>
                    <span class="mx-5 font-medium">Penilaian SPK</span>
                    <svg :class="{ 'rotate-90': open }" class="w-3 h-3 transform transition-transform" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M9 5l7 7-7 7" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

                <!-- Submenu -->
                <div x-show="open" x-transition class="ml-10 space-y-2 py-2 text-sm">
                    <a href="{{ route('admin.kriteria') }}"
                        class="block px-4 py-2 rounded hover:bg-gray-950 dark:hover:text-slate-50 hover:text-slate-50 {{ request()->routeIs('admin.kriteria') ? 'font-semibold bg-white dark:bg-gray-950 text-white dark:text-gray-100' : 'text-gray-400 hover:text-gray-900' }}">
                        Kriteria SPK
                    </a>
                    <a href="#"
                        class="block px-4 py-2 rounded hover:bg-gray-950 dark:hover:text-slate-50 hover:text-slate-50 {{ request()->routeIs('admin.alternatif') ? 'font-semibold bg-white dark:bg-gray-950 text-white dark:text-gray-100' : 'text-gray-400 hover:text-gray-900' }}">
                        Penilaian Alternatif
                    </a>
                    <a href="#"
                        class="block px-4 py-2 rounded hover:bg-gray-950 dark:hover:text-slate-50 hover:text-slate-50 {{ request()->routeIs('admin.hasil') ? 'font-semibold bg-white dark:bg-gray-950 text-white dark:text-gray-100' : 'text-gray-400 hover:text-gray-900' }}">
                        Hasil SPK
                    </a>
                </div>
            </div>
        </nav>
        <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-neutral-950 dark:hover:text-slate-50 hover:text-gray-50"
            href="#">
            <i class="fa-solid fa-right-from-bracket"></i>

            <span class="mx-4 font-medium">Logout</span>
        </a>
    </div>
</aside>
