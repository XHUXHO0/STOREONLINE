@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center w-full space-x-2 text-white bg-blue-800 rounded-lg'
            : 'flex items-center w-full space-x-2 text-blue-800 bg-gray-100 rounded-lg';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>