<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-white px-4 py-8">
        <div class="bg-white border border-gray-300 rounded shadow-sm w-full max-w-xl px-8 py-10">
            <h2 class="text-6xl font-bold text-gray-800 mb-auto">Register</h2>
            <p class="text-xl text-gray-500 mt-3">Please create your account.</p>

            <form method="POST" action="{{ route('register') }}" class="space-y-2 mt-20">
                @csrf

                {{-- Name --}}
                <div>
                    <x-input-label for="username" :value="__('Username')" />
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                            </svg>
                        </div>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                            class="block w-full pl-10 pr-3 py-4 border border-gray-400 bg-white font-normal text-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-gray-400"
                            placeholder="Username" required>

                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                </div>

                {{-- Email --}}
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 512 512">
                                <path
                                    d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                            </svg>
                        </div>
                        <input type="text" name="email" id="email" value="{{ old('email') }}"
                            class="block w-full pl-10 pr-3 py-4 border border-gray-400 bg-white font-normal text-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-gray-400"
                            placeholder="E.g. johndoe@gmail.com" required>

                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>

                {{-- Password --}}
                <div>
                    <x-input-label for="password" :value="__('Password')" />
                    <div x-data="{ show: false }" class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z" />
                            </svg>
                        </div>
                        <input :type="show ? 'text' : 'password'" name="password" id="password"
                            class="block w-full pl-10 pr-3 py-4 border border-gray-400 bg-white font-normal text-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-gray-400"
                            placeholder="Password" required>

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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />
                            </svg>
                        </button>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                {{-- Confirm Password --}}
                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <div x-data="{ show: false }" class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z" />
                            </svg>
                        </div>
                        <input :type="show ? 'text' : 'password'" name="password_confirmation"
                            id="password_confirmation"
                            class="block w-full pl-10 pr-3 py-4 border border-gray-400 bg-white font-normal text-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-gray-400"
                            placeholder="Confirm Password" required>

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

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                {{-- Terms Privacy Policy --}}
                @error('terms')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror


                <div class="flex items-start py-6 ml-2">
                    <div class="flex items-center h-5">
                        <input id="terms" name="terms" type="checkbox"
                            class="border-gray-300 text-neutral-950 h-6 w-6 focus:outline-none focus:ring-0 focus:ring-offset-0">
                    </div>
                    <div class="ml-2 text-md">
                        <span class="text-gray-600">{{ __('I agree to Terms of Use and Privacy Policy') }}</span>
                    </div>
                </div>


                <div class="flex items-center justify-end mt-4">
                    <button
                        class="w-full flex justify-center py-4 px-4 border border-transparent text-base uppercase font-medium text-zinc-50 bg-zinc-700 hover:bg-zinc-950 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition duration-200">
                        {{ __('Register') }}
                    </button>
                </div>

                <div class="text-center py-4">
                    <p class="text-xl text-gray-600">
                        Already have an Account?
                        <a class="text-xl font-normal text-zinc-950 hover:text-zinc-600 transitionzinc"
                            href="{{ route('login') }}">
                            {{ __('Login here') }}
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
