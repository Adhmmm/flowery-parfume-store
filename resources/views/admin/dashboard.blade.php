<x-admin-layout title="Dashboard">
    {{-- Navbar --}}
    <x-slot name="header">
        <nav class="bg-white w-full shadow-sm rounded-none">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center py-4 gap-4 sm:gap-0">
                    <div class="flex items-center gap-4 sm:gap-8">
                        <div class="bg-gradient-to-r from-blue-500 to-violet-500 rounded-2xl py-3 px-3 ml-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-base sm:text-xl font-bold">
                                {{ __('Dashboard') }}
                            </h1>
                            <p class="text-sm text-gray-500">
                                {{ __('Welcome to your dashboard!') }}
                            </p>
                        </div>
                    </div>
                    <!-- Desktop Dropdown -->
                    <div class="relative">
                        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-2 sm:gap-4">
                            <div class="px-2 sm:px-4 lg:px-2">
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center gap-2">
                                        <div class="mt-1 sm:px-2 lg:px-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6 text-black">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h1 class="text-sm font-semibold capitalize">
                                                {{ Auth::user()->name }}</h1>
                                            <p class="text-xs text-gray-500">
                                                {{ Auth::user()->email }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-2">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="mt-2 sm:mt-0 inline-flex items-center px-2 py-1 sm:px-4 sm:py-2 text-sm font-semibold rounded-sm text-red-600 border border-red-600 hover:text-red-500 hover:border-red-500 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="size-5 mr-2">
                                            <path fill-rule="evenodd"
                                                d="M7.5 3.75A1.5 1.5 0 0 0 6 5.25v13.5a1.5 1.5 0 0 0 1.5 1.5h6a1.5 1.5 0 0 0 1.5-1.5V15a.75.75 0 0 1 1.5 0v3.75a3 3 0 0 1-3 3h-6a3 3 0 0 1-3-3V5.25a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3V9A.75.75 0 0 1 15 9V5.25a1.5 1.5 0 0 0-1.5-1.5h-6Zm10.72 4.72a.75.75 0 0 1 1.06 0l3 3a.75.75 0 0 1 0 1.06l-3 3a.75.75 0 1 1-1.06-1.06l1.72-1.72H9a.75.75 0 0 1 0-1.5h10.94l-1.72-1.72a.75.75 0 0 1 0-1.06Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </x-slot>

    <div class="flex-1 px-2 sm:px-6 lg:px-12 overflow-y-auto">
        <x-slot name="description">
            <p class="text-gray-600 text-base sm:text-xl">
                {{ __('') }}
            </p>
        </x-slot>

        <div
            class="py-4 sm:py-6 mt-2 sm:mt-4 lg:py-8 bg-gradient-to-tr from-blue-800 to-indigo-900 mx-auto shadow-lg rounded-2xl">
            {{-- Dashboard Overview --}}
            <div class="w-full max-w-screen-xl mx-auto px-2 sm:px-4 lg:px-8">
                <div class="bg-white p-2 sm:p-8 overflow-hidden shadow-md rounded-lg">
                    <div class="flex items-center gap-4 sm:gap-6">
                        <div
                            class="bg-gradient-to-r from-violet-600 to-indigo-600 shadow-md rounded-2xl py-3 px-3 ml-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6 text-white">
                                <path
                                    d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75ZM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 0 1-1.875-1.875V8.625ZM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 0 1 3 19.875v-6.75Z" />
                            </svg>

                        </div>
                        <div class="px-2 sm:-ml-4 text-gray-900">
                            <h2 class="text-xl sm:text-3xl font-bold capitalize mb-2">
                                {{ __('Selamat Datang, ') . Auth::user()->name . '!' }} <span
                                    class="inline-block text-xl sm:text-2xl">👋</span>
                            </h2>
                        </div>
                    </div>
                    <div class="px-2 mt-5 sm:ml-2 text-gray-500 font-semibold">
                        <p class="text-sm sm:text-base text-gray-500 leading-relaxed">
                            Kelola seluruh inventaris data produk, data kriteria, dan data penilaian alternatif dengan
                            efisien dan <br> terorganisir melalui dashboard yang telah dioptimalkan.
                        </p>
                    </div>
                    <div class="px-4 sm:px-6 mt-2">
                        <div class="bg-orange-100 rounded-xl px-4 py-3 w-full sm:w-fit max-w-full sm:max-w-[300px]">
                            <ul class="list-disc ml-4">
                                <li class="text-xs sm:text-xs lg:text-xs font-semibold text-orange-600 leading-relaxed">
                                    Sistem yang hebat dimulai dari pengelolaan yang rapih.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
