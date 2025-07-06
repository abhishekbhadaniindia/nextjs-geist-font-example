@props([
    'name' => '',
    'label' => '',
    'checked' => false,
    'disabled' => false,
])

@php
    $baseClasses = 'rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-800 dark:focus:ring-blue-500 dark:ring-offset-gray-900';
    $disabledClasses = $disabled ? 'opacity-50 cursor-not-allowed' : '';
    $classes = $baseClasses . ' ' . $disabledClasses;
@endphp

<div class="flex items-center space-x-2">
    <input
        type="checkbox"
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $checked ? 'checked' : '' }}
        {{ $disabled ? 'disabled' : '' }}
        {{ $attributes->merge(['class' => $classes]) }}
    />
    @if($label)
        <label for="{{ $name }}" class="select-none text-gray-900 dark:text-gray-100">{{ $label }}</label>
    @endif
</div>
