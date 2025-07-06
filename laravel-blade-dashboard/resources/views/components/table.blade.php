@props([
    'headers' => [],
    'rows' => [],
    'striped' => true,
    'hover' => true,
    'actions' => [], // e.g. ['edit', 'delete', 'print', 'remove']
    'variant' => 'default', // default, bordered, compact
])

@php
    $tableClasses = 'min-w-full divide-y dark:divide-gray-700 ';
    if ($variant === 'default') {
        $tableClasses .= 'divide-gray-200';
    } elseif ($variant === 'bordered') {
        $tableClasses .= 'border border-gray-300 rounded';
    } elseif ($variant === 'compact') {
        $tableClasses .= 'divide-gray-200 text-sm';
    }
@endphp

<table class="{{ $tableClasses }}">
    <thead class="@if($variant === 'default' || $variant === 'compact') bg-gray-50 dark:bg-gray-800 @else bg-transparent @endif">
        <tr>
            @foreach($headers as $header)
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">
                    {{ $header }}
                </th>
            @endforeach
            @if(count($actions) > 0)
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">
                    Actions
                </th>
            @endif
        </tr>
    </thead>
    <tbody class="@if($variant === 'default' || $variant === 'compact') bg-white divide-y divide-gray-200 dark:bg-gray-900 dark:divide-gray-700 @else bg-transparent @endif">
        @foreach($rows as $row)
            <tr @class([
                'bg-white dark:bg-gray-900',
                'hover:bg-gray-100 dark:hover:bg-gray-700' => $hover,
                'odd:bg-white even:bg-gray-50 dark:odd:bg-gray-900 dark:even:bg-gray-800' => $striped,
            ])>
                @foreach($row as $cell)
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                        {{ $cell }}
                    </td>
                @endforeach
                @if(count($actions) > 0)
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100 space-x-2">
                        @foreach($actions as $action)
                            @if($action === 'edit')
                                <button class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-600" title="Edit">
                                    Edit
                                </button>
                            @elseif($action === 'delete')
                                <button class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-600" title="Delete">
                                    Delete
                                </button>
                            @elseif($action === 'print')
                                <button class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-600" title="Print">
                                    Print
                                </button>
                            @elseif($action === 'remove')
                                <button class="text-yellow-600 hover:text-yellow-900 dark:text-yellow-400 dark:hover:text-yellow-600" title="Remove">
                                    Remove
                                </button>
                            @endif
                        @endforeach
                    </td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
