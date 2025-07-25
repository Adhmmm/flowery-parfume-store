<x-app-layout title="Dashboard">
    {{-- Navbar --}}
    <x-slot name="header">
        <nav class="bg-white w-full shadow-md rounded-md">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center py-4 gap-4 sm:gap-0">
                    <div class="flex items-center gap-3 sm:gap-6">
                        <div class="bg-gradient-to-r from-blue-500 to-violet-500 shadow-md rounded-2xl py-2 px-2">
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
                                {{ __('Welcome your dashboard!') }}
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
                                        class="mt-2 sm:mt-0 inline-flex items-center px-2 py-1 sm:px-4 sm:py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700 transition">
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
            {{-- Table Card --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-4 sm:mt-6 w-full px-4">
                <!-- Card 1 -->
                <div class="bg-white shadow-md rounded-lg p-4 w-full">
                    <div class="flex justify-between items-center text-base font-semibold text-gray-600">
                        Total Income
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 sm:w-8 sm:h-8 text-blue-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3" />
                        </svg>
                    </div>
                    <div class="mt-2 flex items-center">
                        <p class="text-lg sm:text-2xl font-bold text-gray-900">1.312.892</p>
                        <span class="ml-3 text-green-500 text-sm sm:text-base"><i class="fa-solid fa-arrow-up"></i>
                            30%</span>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white shadow-md rounded-lg p-4 w-full">
                    <div class="flex justify-between items-center text-base font-semibold text-gray-600">
                        Total Products
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 sm:w-8 sm:h-8 text-yellow-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                        </svg>
                    </div>
                    <div class="mt-2 flex items-center">
                        <p class="text-xl sm:text-2xl font-medium text-gray-900">6.732</p>
                        <span class="ml-3 text-green-500 text-sm sm:text-base"><i class="fa-solid fa-arrow-up"></i>
                            23%</span>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white shadow-md rounded-lg p-4 w-full">
                    <div class="flex justify-between items-center text-base font-semibold text-gray-600">
                        Total Orders
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 sm:w-8 sm:h-8 text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </div>
                    <div class="mt-2 flex items-center">
                        <p class="text-xl sm:text-2xl font-medium text-gray-900">412</p>
                        <span class="ml-3 text-red-500 text-sm sm:text-base"><i class="fa-solid fa-arrow-down"></i>
                            30%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
