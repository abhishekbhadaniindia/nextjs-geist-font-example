@props([
    'name' => '',
    'label' => '',
    'value' => '',
    'checked' => false,
    'disabled' => false,
])

@php
    $baseClasses = 'rounded-full border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-800 dark:focus:ring-blue-500 dark:ring-offset-gray-900';
    $disabledClasses = $disabled ? 'opacity-50 cursor-not-allowed' : '';
    $classes = $baseClasses . ' ' . $disabledClasses;
@endphp

<div class="flex items-center space-x-2">
    <input
        type="radio"
        name="{{ $name }}"
        id="{{ $name }}-{{ $value }}"
        value="{{ $value }}"
        {{ $checked ? 'checked' : '' }}
        {{ $disabled ? 'disabled' : '' }}
        {{ $attributes->merge(['class' => $classes]) }}
    />
    @if($label)
        <label for="{{ $name }}-{{ $value }}" class="select-none text-gray-900 dark:text-gray-100">{{ $label }}</label>
    @endif
</div>
