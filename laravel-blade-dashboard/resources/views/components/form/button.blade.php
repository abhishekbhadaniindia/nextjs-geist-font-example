@props([
    'type' => 'button',
    'label' => '',
    'variant' => 'primary', {{-- primary, secondary, danger --}}
    'size' => 'md', {{-- sm, md, lg --}}
    'disabled' => false,
])

@php
    $sizeClasses = [
        'sm' => 'px-3 py-1.5 text-sm',
        'md' => 'px-4 py-2 text-base',
        'lg' => 'px-5 py-3 text-lg',
    ];

    $variantClasses = [
        'primary' => 'bg-blue-600 text-white hover:bg-blue-700 focus:ring-blue-500',
        'secondary' => 'bg-gray-200 text-gray-900 hover:bg-gray-300 focus:ring-gray-400',
        'danger' => 'bg-red-600 text-white hover:bg-red-700 focus:ring-red-500',
    ];

    $disabledClasses = $disabled ? 'opacity-50 cursor-not-allowed' : '';

    $classes = 'rounded shadow focus:outline-none focus:ring-2 focus:ring-offset-2 ' . $sizeClasses[$size] . ' ' . $variantClasses[$variant] . ' ' . $disabledClasses;
@endphp

<button
    type="{{ $type }}"
    {{ $disabled ? 'disabled' : '' }}
    {{ $attributes->merge(['class' => $classes]) }}
>
    {{ $label }}
</button>
