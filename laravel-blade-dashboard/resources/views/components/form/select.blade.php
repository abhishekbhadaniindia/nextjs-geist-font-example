@props([
    'name' => '',
    'label' => '',
    'options' => [],
    'selected' => '',
    'required' => false,
    'disabled' => false,
    'size' => 'md', {{-- sm, md, lg --}}
    'variant' => 'outline', {{-- outline, filled, underlined --}}
])

@php
    $sizeClasses = [
        'sm' => 'px-2 py-1 text-sm h-8',
        'md' => 'px-3 py-2 text-base h-10',
        'lg' => 'px-4 py-3 text-lg h-12',
    ];

    $variantClasses = [
        'outline' => 'border border-gray-300 bg-white text-gray-900 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-300 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-100 dark:focus:border-blue-400 dark:focus:ring-blue-500',
        'filled' => 'border border-transparent bg-gray-100 text-gray-900 rounded-md focus:bg-white focus:border-blue-500 focus:ring focus:ring-blue-300 dark:bg-gray-700 dark:text-gray-100 dark:focus:bg-gray-800 dark:focus:border-blue-400 dark:focus:ring-blue-500',
        'underlined' => 'border-b border-gray-300 bg-transparent text-gray-900 rounded-none focus:border-blue-500 focus:ring focus:ring-blue-300 dark:border-gray-600 dark:text-gray-100 dark:focus:border-blue-400 dark:focus:ring-blue-500',
    ];

    $disabledClasses = $disabled ? 'opacity-50 cursor-not-allowed' : '';

    $classes = $sizeClasses[$size] . ' ' . $variantClasses[$variant] . ' ' . $disabledClasses . ' transition duration-150 ease-in-out';
@endphp

@if($label)
    <label for="{{ $name }}" class="block mb-1 font-medium text-gray-700 dark:text-gray-300">{{ $label }} @if($required)<span class="text-red-500">*</span>@endif</label>
@endif

<select
    name="{{ $name }}"
    id="{{ $name }}"
    {{ $required ? 'required' : '' }}
    {{ $disabled ? 'disabled' : '' }}
    {{ $attributes->merge(['class' => $classes]) }}
>
    @foreach($options as $value => $optionLabel)
        <option value="{{ $value }}" @if($value == $selected) selected @endif>{{ $optionLabel }}</option>
    @endforeach
</select>
