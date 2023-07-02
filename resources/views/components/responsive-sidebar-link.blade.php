@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center w-full space-x-2 text-white bg-blue-800  dark:bg-blue-800   rounded-lg'
            : 'flex items-center w-full space-x-2 text-gray-800 bg-gray-100 dark:bg-gray-400 rounded-lg';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>