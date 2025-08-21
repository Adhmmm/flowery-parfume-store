<footer class="bg-white py-32 md:py-40 dark:bg-black">
    <div class="container px-4 sm:px-6 md:px-12 mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 md:gap-12">
            <!-- Subscribe -->
            <div class="sm:col-span-2">
                <h1 class="text-2xl font-semibold text-gray-800 dark:text-white">
                    Enjoy <span class="font-aclonica text-xl">Flowery Parfum</span> exclusive offers.
                </h1>
                <p class="text-gray-500 text-sm mt-3">Stay updated with our latest news & promotions.</p>

                <div class="mt-6 flex flex-col sm:flex-row gap-3">
                    <input type="text" placeholder="Email Address"
                        class="w-1/2 py-4 px-4 text-sm text-gray-600 border focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-gray-700 dark:focus:border-gray-400 dark:bg-black dark:text-white dark:border-gray-700" />

                    <button
                        class="w-1/2 sm:w-auto px-5 py-2 text-sm font-medium bg-white text-black hover:bg-opacity-90">
                        Subscribe
                    </button>
                </div>
            </div>

            <!-- Marketplace -->
            <div>
                <p class="font-semibold text-gray-800 dark:text-white">Marketplace</p>
                <ul class="mt-4 space-y-2 text-sm">
                    <li><a href="#" class="text-gray-600 hover:text-gray-300 dark:text-gray-200">Shopee</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-gray-300 dark:text-gray-200">Tokopedia</a>
                    </li>
                    <li><a href="#" class="text-gray-600 hover:text-gray-300 dark:text-gray-200">Lazada</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-gray-300 dark:text-gray-200">Tiktok Shop</a>
                    </li>
                </ul>
            </div>

            <!-- Company -->
            <div>
                <p class="font-semibold text-gray-800 dark:text-white">Company</p>
                <ul class="mt-4 space-y-2 text-sm">
                    @auth
                        @if (auth()->user()->role === 'admin')
                            <li>
                                <a href="{{ route('login.admin') }}"
                                    class="text-gray-600 hover:text-gray-300 dark:text-gray-200">
                                    Seller Centre
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="#"
                                    onclick="event.preventDefault(); Swal.fire({icon: 'info', title: 'Akses Ditolak', text: 'Hanya admin yang dapat mengakses Seller Centre.', showConfirmButton: false, timer: 2000, position: 'top'});"
                                    class="text-gray-400 cursor-not-allowed dark:text-gray-500">
                                    Seller Centre
                                </a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a href="{{ route('login.admin') }}"
                                class="text-gray-600 hover:text-gray-300 dark:text-gray-200">
                                Seller Centre
                            </a>
                        </li>
                    @endauth
                    <li><a href="{{ route('customer.about') }}" class="text-gray-600 hover:text-gray-300 dark:text-gray-200">Blog</a></li>
                    <li><a href="{{ route('customer.contact') }}" class="text-gray-600 hover:text-gray-300 dark:text-gray-200">Contact</a></li>
                </ul>
            </div>

            <!-- Social -->
            <div>
                <p class="font-semibold text-gray-800 dark:text-white">Connect with us</p>
                <ul class="mt-4 space-y-2 text-sm">
                    <li><a href="#" class="text-gray-600 hover:text-gray-300 dark:text-gray-200">Instagram</a>
                    </li>
                    <li><a href="#" class="text-gray-600 hover:text-gray-300 dark:text-gray-200">Facebook</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-gray-300 dark:text-gray-200">Tiktok</a></li>
                </ul>
            </div>
        </div>

        <hr class="my-8 border-gray-200 dark:border-gray-700">

        <div class="flex flex-col md:flex-row items-center justify-between text-sm text-gray-500 dark:text-gray-400">
            <p>Copyright © {{ date('Y') }} Flowery Parfum - All rights reserved.</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</footer>
