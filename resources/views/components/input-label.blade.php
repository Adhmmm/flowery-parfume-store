@props(['value'])

<label {{ $attributes->merge(['class' => 'font-anuphan block font-normal text-xl text-gray-900 pl-1 py-2']) }}>
    {{ $value ?? $slot }}
</label>
