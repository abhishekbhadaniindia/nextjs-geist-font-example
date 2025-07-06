@props([
    'fields' => [], {{-- array of field definitions --}}
    'actions' => [], {{-- array of action buttons --}}
])

<form {{ $attributes->merge(['class' => 'space-y-6']) }}>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach($fields as $field)
            <div>
                @if($field['type'] === 'input')
                    <x-form.input
                        :type="$field['inputType'] ?? 'text'"
                        :name="$field['name']"
                        :label="$field['label']"
                        :placeholder="$field['placeholder'] ?? ''"
                        :required="$field['required'] ?? false"
                        :disabled="$field['disabled'] ?? false"
                        :size="$field['size'] ?? 'md'"
                        :variant="$field['variant'] ?? 'outline'"
                    />
                @elseif($field['type'] === 'select')
                    <x-form.select
                        :name="$field['name']"
                        :label="$field['label']"
                        :options="$field['options'] ?? []"
                        :selected="$field['selected'] ?? ''"
                        :required="$field['required'] ?? false"
                        :disabled="$field['disabled'] ?? false"
                        :size="$field['size'] ?? 'md'"
                        :variant="$field['variant'] ?? 'outline'"
                    />
                @elseif($field['type'] === 'checkbox')
                    <x-form.checkbox
                        :name="$field['name']"
                        :label="$field['label']"
                        :checked="$field['checked'] ?? false"
                        :disabled="$field['disabled'] ?? false"
                    />
                @elseif($field['type'] === 'radio')
                    <x-form.radio
                        :name="$field['name']"
                        :label="$field['label']"
                        :value="$field['value']"
                        :checked="$field['checked'] ?? false"
                        :disabled="$field['disabled'] ?? false"
                    />
                @elseif($field['type'] === 'file')
                    <x-form.file
                        :name="$field['name']"
                        :label="$field['label']"
                        :required="$field['required'] ?? false"
                        :disabled="$field['disabled'] ?? false"
                    />
                @elseif($field['type'] === 'button')
                    <x-form.button
                        :type="$field['buttonType'] ?? 'button'"
                        :label="$field['label']"
                        :variant="$field['variant'] ?? 'primary'"
                        :disabled="$field['disabled'] ?? false"
                    />
                @endif
            </div>
        @endforeach
    </div>

    <div class="mt-6 flex space-x-4">
        @foreach($actions as $action)
            <x-form.button
                :type="$action['type'] ?? 'button'"
                :label="$action['label']"
                :variant="$action['variant'] ?? 'primary'"
                :disabled="$action['disabled'] ?? false"
            />
        @endforeach
    </div>
</form>
