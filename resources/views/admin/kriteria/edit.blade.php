<x-admin-layout title="Kriteria">
    <x-slot name="header">
        <nav class="bg-white w-full shadow-sm rounded-none">
            <div class="flex justify-between items-center h-20 max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center gap-4 sm:gap-8">
                    <div class="bg-gradient-to-r from-violet-600 to-indigo-600 rounded-2xl py-3 px-3 ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                        </svg>
                    </div>
                    <div class="px-2 sm:-ml-4">
                        <h1 class="text-lg sm:text-xl lg:text-xl font-bold">
                            {{ __('Edit Kriteria') }}
                        </h1>
                        <p class="text-sm sm:text-sm lg:text-sm font-normal text-gray-500">
                            {{ __('Manage kriteria') }}
                        </p>
                    </div>
                </div>
            </div>
        </nav>
    </x-slot>

    <x-slot name="description">
        <p class="text-gray-600 text-xl">
            {{ __('') }}
        </p>
    </x-slot>

    <div class="flex-1 px-2 sm:px-6 lg:px-12 overflow-y-auto">
        <div class="bg-white p-6 pr-8 rounded-lg shadow-sm">
            <div class="relative flex justify-between items-center mt-4 md:mt-0">
                <div>
                    <h1 class="text-lg sm:text-lg lg:text-lg font-bold">{{ __('Edit Data Kriteria') }}</h1>
                    <p class="text-sm sm:text-sm lg:text-sm font-normal text-gray-500">
                        {{ __('Silahkan isi form untuk mengubah data kriteria.') }}</p>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="fixed top-8 left-1/2 transform -translate-x-1/2 z-50 w-full max-w-md">
                <div class="p-4 bg-red-100 border border-red-300 text-red-600 rounded shadow-lg">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <div class="bg-white p-6 mt-6 rounded-sm shadow-sm border border-gray-300 max-w-3xl">
            <form action="{{ route('kriteria.update', $kriteria->id) }}" method="POST"
                enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')
                <div class="items-center justify-between md:mt-0 mt-4">
                    <div class="w-full">
                        <div>
                            <label for="nama_kriteria" class="block text-sm font-medium text-gray-700">Nama
                                Kriteria</label>
                            <input type="text" name="nama_kriteria" id="nama_kriteria"
                                value="{{ old('nama_kriteria', $kriteria->nama_kriteria) }}"
                                class="mt-1 block w-full border border-gray-300 rounded-sm shadow-sm p-3 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-gray-400">
                        </div>
                    </div>
                    <div class="w-full">
                        <div>
                            <label for="bobot" class="block text-sm font-medium text-gray-700 mt-4">Bobot (%)</label>
                            <input type="number" name="bobot" id="bobot" step="0.01" max="1"
                                min="0" value="{{ old('bobot', $kriteria->bobot) }}"
                                class="mt-1 block w-full border border-gray-300 rounded-sm shadow-sm p-3 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-gray-400">
                        </div>
                    </div>
                    <div class="w-full">
                        <div>
                            <label for="tipe_kriteria" class="block text-sm font-medium text-gray-700 mt-4">Tipe
                                Kriteria</label>
                            <select name="tipe_kriteria" id="tipe_kriteria"
                                value="{{ old('tipe_kriteria', $kriteria->tipe_kriteria) }}" required
                                class="mt-1 block w-full border border-gray-300 rounded-sm shadow-sm p-3 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-gray-400">
                                <option value="" disabled selected>Pilih tipe kriteria</option>
                                <option value="benefit"
                                    {{ old('tipe_kriteria', $kriteria->tipe_kriteria) == 'benefit' ? 'selected' : '' }}>
                                    Benefit</option>
                                <option value="cost"
                                    {{ old('tipe_kriteria', $kriteria->tipe_kriteria) == 'cost' ? 'selected' : '' }}>
                                    Cost</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end gap-3">
                    <a href="{{ route('kriteria.index') }}"
                        class="inline-block px-6 py-2 border border-gray-400 rounded-xl text-sm font-medium text-gray-600 hover:bg-gray-100 transition">
                        Cancel
                    </a>
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-xl shadow text-sm font-medium">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
