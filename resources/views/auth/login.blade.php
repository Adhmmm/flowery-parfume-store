<x-guest-layout>
    <div class="min-h-screen flex flex-col md:flex-row">
        <!-- Left Side - Icons -->
        <div class="hidden md:block w-full relative">
            <img src="{{ asset('/images/bg-sakura.jpg') }}" alt="Gambar Parfume"
                class="absolute inset-0 w-full h-full object-cover">

            <div class="absolute inset-0 bg-black opacity-30"></div>

            <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-6 z-10">
                <h1 class="text-3xl md:text-4xl font-flowery font-bold">Flowery-Parfume</h1>
                <p class="mt-2 text-base md:text-lg font-light">Sistem Rekomendasi Parfum Terbaik</p>
            </div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="w-full md:w-1/2 flex items-center justify-center bg-slate-50 px-6 py-12">
            <div class="bg-white border border-gray-300 p-6 md:p-8 rounded-xl shadow-md w-full max-w-md">
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-auto">Hello Administrator!</h2>
                <p class="text-sm text-center text-gray-500 mb-6">Please log in to your account.</p>

                <!-- Display errors if any -->
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <!-- Username Field -->
                    <div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                </svg>
                            </div>
                            <input type="text" name="email" id="email" value="{{ old('email') }}"
                                class="block w-full pl-10 pr-3 py-4 border border-gray-300 rounded-lg bg-gray-50 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Username" required>
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div>
                        <div x-data="{ show: false }" class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z" />
                                </svg>
                            </div>
                            <input :type="show ? 'text' : 'password'" name="password" id="password"
                                class="block w-full pl-10 pr-3 py-4 border border-gray-300 rounded-lg bg-gray-50 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter your password" required>

                            <button type="button" @click="show = !show"
                                class="absolute inset-y-0 right-0 px-3 flex items-center text-gray-500 focus:outline-none"
                                tabindex="-1">
                                <svg x-show="show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.956 9.956 0 012.293-3.95m3.249-2.383A9.956 9.956 0 0112 5c4.478 0 8.268 2.943 9.542 7a9.965 9.965 0 01-4.043 5.197M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3l18 18" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Login Button -->
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button
                            class="w-full flex justify-center py-4 px-4 border border-transparent rounded-lg text-xl uppercase font-medium text-zinc-50 bg-zinc-700 hover:bg-zinc-950 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition duration-200">
                            {{ __('Sign In') }}
                        </x-primary-button>
                    </div>

                    <!-- Register Link -->
                    <div class="text-center">
                        <p class="text-sm text-gray-600">
                            Don't have an account?
                            <a href="{{ route('register') }}"
                                class="font-medium text-zinc-950 hover:text-zinc-600 transitionzinc">
                                Create Account
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
