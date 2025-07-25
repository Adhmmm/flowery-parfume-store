<nav x-data="{ isOpen: false }" class="fixed top-0 left-0 right-0 z-50 bg-white">
    <div class="container px-2 py-8 lg:py-8 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">
            <a href="#">
                <img class="w-auto h-8 sm:h-10" src="{{ asset('/images/flowery-logo.png') }}" alt="">
            </a>

            <!-- Mobile menu button -->
            <div class="flex lg:hidden">
                <button x-cloak @click="isOpen = !isOpen" type="button"
                    class="text-black dark:text-black hover:text-gray-600 dark:hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:focus:text-gray-600"
                    aria-label="toggle menu">
                    <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                    </svg>

                    <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
            class="absolute inset-x-0 z-20 w-full px-8 py-4 transition-all duration-300 ease-in-out bg-white md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center">
            <div class="flex flex-col md:flex-row md:mx-6">
                <a class="my-2 text-xl font-normal text-gray-700 transition-colors duration-300 transform dark:text-neutral-900 hover:text-gray-500 dark:hover:text-gray-600 md:mx-4 md:my-0"
                    href="{{ route('landing.home') }}">Home</a>
                <a class="my-2 text-xl font-normal text-gray-700 transition-colors duration-300 transform dark:text-neutral-900 hover:text-gray-500 dark:hover:text-gray-600 md:mx-4 md:my-0"
                    href="{{ route('landing.produk') }}">Catalog</a>
                <a class="my-2 text-xl font-normal text-gray-700 transition-colors duration-300 transform dark:text-neutral-900 hover:text-gray-500 dark:hover:text-gray-600 md:mx-4 md:my-0"
                    href="{{ route('landing.about') }}">Blog</a>
                <a class="my-2 text-xl font-normal text-gray-700 transition-colors duration-300 transform dark:text-neutral-900 hover:text-gray-500 dark:hover:text-gray-600 md:mx-4 md:my-0"
                    href="{{ route('landing.contact') }}">Contact</a>
            </div>

            <div class="flex justify-between md:flex-row md:mx-4">
                <div class="flex flex-col justify-between gap-2 md:flex-row md:mx-0">
                    <div
                        class="px-4 py-1.5 rounded-full shadow-sm border border-neutral-950 transition-colors duration-300 transform hover:bg-neutral-800 dark:hover:bg-neutral-950 hover:text-neutral-800 dark:hover:text-white">
                        <button class="flex justify-between gap-2">
                            <div class="mt-1">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3 3H5L5.4 5M7 13H17L21 5H5.4M7 13L5.4 5M7 13L4.70711 15.2929C4.07714 15.9229 4.52331 17 5.41421 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM9 19C9 20.1046 8.10457 21 7 21C5.89543 21 5 20.1046 5 19C5 17.8954 5.89543 17 7 17C8.10457 17 9 17.8954 9 19Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <a href="#" class="text-xl sm:text-xl md:text-xl font-normal ">
                                Cart
                            </a>
                        </button>
                    </div>
                    <div
                        class="px-5 py-1.5 rounded-full shadow-sm border border-neutral-950 transition-colors duration-300 transform hover:bg-neutral-800 dark:hover:bg-neutral-950 hover:text-neutral-800 dark:hover:text-white">
                        <button class="flex items-center justify-between gap-2">
                            <a href="#" class="text-xl sm:text-xl md:text-xl font-normal ">
                                Login
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Alpine.js CDN for navbar functionality -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
