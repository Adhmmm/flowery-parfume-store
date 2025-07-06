    @props(['active'])

    @php
        $classes =
            $active ?? false
                ? ' flex items-center gap-3 px-4 py-2 mt-5 text-lg font-semibold text-gray-900 transition-colors duration-300 transform bg-gray-900 text-slate-50 hover:text-slate-50 rounded-md'
                : ' flex items-center gap-3 px-4 py-2 mt-5 text-lg font-semibold text-gray-500 hover:bg-gray-900 hover:text-slate-50 focus:text-slate-50 transition duration-150 rounded-md ease-in-out';
    @endphp

    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
