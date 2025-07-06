@props([
    'name' => '',
    'label' => '',
    'required' => false,
    'disabled' => false,
])

@php
    $baseClasses = 'block w-full text-sm text-gray-900 border border-gray-300 rounded cursor-pointer bg-white dark:text-gray-400 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500';
    $disabledClasses = $disabled ? 'opacity-50 cursor-not-allowed' : '';
    $classes = $baseClasses . ' ' . $disabledClasses;
@endphp

@if($label)
    <label for="{{ $name }}" class="block mb-1 font-medium text-gray-700 dark:text-gray-300">{{ $label }} @if($required)<span class="text-red-500">*</span>@endif</label>
@endif

<input
    type="file"
    name="{{ $name }}"
    id="{{ $name }}"
    {{ $required ? 'required' : '' }}
    {{ $disabled ? 'disabled' : '' }}
    {{ $attributes->merge(['class' => $classes]) }}
/>
