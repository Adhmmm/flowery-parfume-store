<nav x-data="{ isOpen: false }" class="fixed top-0 left-0 right-0 z-50 bg-white">
    <div class="container px-2 py-8 lg:py-8 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">
            <a href="/">
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
                <x-nav-link
                    class="my-2 text-xl font-normal text-gray-700 transition-colors duration-300 transform dark:text-neutral-900 hover:text-gray-500 dark:hover:text-gray-600 hover:bg-white md:mx-4 md:my-0"
                    :href="route('customer.home')" :active="request()->routeIs('/')">Home</x-nav-link>
                <x-nav-link
                    class="my-2 text-xl font-normal text-gray-700 transition-colors duration-300 transform dark:text-neutral-900 hover:text-gray-500 dark:hover:text-gray-600 hover:bg-white md:mx-4 md:my-0"
                    :href="route('customer.catalog')" :active="request()->routeIs('/catalog')">Catalog</x-nav-link>
                <x-nav-link
                    class="my-2 text-xl font-normal text-gray-700 transition-colors duration-300 transform dark:text-neutral-900 hover:text-gray-500 dark:hover:text-gray-600 hover:bg-white md:mx-4 md:my-0"
                    :href="route('customer.about')" :active="request()->routeIs('/blog')">Blog</x-nav-link>
                <x-nav-link
                    class="my-2 text-xl font-normal text-gray-700 transition-colors duration-300 transform dark:text-neutral-900 hover:text-gray-500 dark:hover:text-gray-600 hover:bg-white md:mx-4 md:my-0"
                    :href="route('customer.contact')" :active="request()->routeIs('/contact')">Contact</x-nav-link>
            </div>

            <div class="flex justify-between md:flex-row md:mx-4">
                <div class="flex flex-col justify-between gap-2 md:flex-row md:mx-0">
                    @guest
                        <div
                            class="px-5 py-1.5 rounded-full shadow-sm border border-zinc-950 transition-colors duration-300 transform hover:bg-zinc-700 hover:text-white">
                            <div class="flex items-center justify-between gap-2">
                                <a href="{{ route('login.customer') }}" class="text-xl sm:text-xl md:text-xl font-normal ">
                                    Sign In
                                </a>
                            </div>
                        </div>
                        <div
                            class="px-5 py-1.5 rounded-full shadow-sm text-white bg-zinc-500 transition-colors duration-300 transform hover:bg-zinc-900">
                            <a href="{{ route('register') }}" class="text-xl sm:text-xl md:text-xl font-normal ">
                                Sign Up
                            </a>
                        </div>
                    @else
                        <div
                            class="px-5 py-1.5 rounded-full shadow-sm border border-neutral-950 transition-colors duration-300 transform hover:bg-neutral-800 dark:hover:bg-neutral-950 hover:text-neutral-800 dark:hover:text-white">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="text-xl sm:text-xl md:text-xl font-normal ">
                                    Logout
                                </button>
                            </form>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Alpine.js CDN for navbar functionality -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
