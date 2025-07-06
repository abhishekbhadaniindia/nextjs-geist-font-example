@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto space-y-8">
    <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

    <section class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-semibold mb-4">Dynamic Form</h2>
        <form action="#" method="POST" class="space-y-6">
            @csrf
            <x-dynamic-form
                :fields="[
                    ['type' => 'input', 'inputType' => 'text', 'name' => 'text_input', 'label' => 'Text Input', 'required' => true],
                    ['type' => 'input', 'inputType' => 'email', 'name' => 'email_input', 'label' => 'Email Input', 'required' => true],
                    ['type' => 'input', 'inputType' => 'password', 'name' => 'password_input', 'label' => 'Password Input', 'required' => true],
                    ['type' => 'input', 'inputType' => 'number', 'name' => 'number_input', 'label' => 'Number Input'],
                    ['type' => 'input', 'inputType' => 'date', 'name' => 'date_input', 'label' => 'Date Input'],
                    ['type' => 'input', 'inputType' => 'url', 'name' => 'url_input', 'label' => 'URL Input'],
                    ['type' => 'input', 'inputType' => 'tel', 'name' => 'phone_input', 'label' => 'Phone Input'],
                    ['type' => 'input', 'inputType' => 'search', 'name' => 'search_input', 'label' => 'Search Input'],
                    ['type' => 'checkbox', 'name' => 'checkbox_input', 'label' => 'Checkbox'],
                    ['type' => 'radio', 'name' => 'radio_input', 'value' => 'option1', 'label' => 'Radio Option 1'],
                    ['type' => 'radio', 'name' => 'radio_input', 'value' => 'option2', 'label' => 'Radio Option 2'],
                    ['type' => 'file', 'name' => 'file_input', 'label' => 'File Upload'],
                    ['type' => 'select', 'name' => 'select_input', 'label' => 'Select Input', 'options' => ['' => 'Select an option', '1' => 'Option 1', '2' => 'Option 2']],
                ]"
                :actions="[
                    ['type' => 'submit', 'label' => 'Submit', 'variant' => 'primary'],
                    ['type' => 'button', 'label' => 'Cancel', 'variant' => 'secondary'],
                ]"
            />
        </form>
    </section>

    <section class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-semibold mb-4">Dropdown</h2>
        <x-dropdown :items="[
            ['label' => 'Profile', 'href' => '#'],
            ['label' => 'Settings', 'href' => '#'],
            ['label' => 'Logout', 'href' => '#'],
        ]" label="User Menu" />
    </section>

    <section class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-semibold mb-4">Table</h2>
        <x-table
            :headers="['Name', 'Email', 'Role']"
            :rows="[
                ['John Doe', 'john@example.com', 'Admin'],
                ['Jane Smith', 'jane@example.com', 'User'],
                ['Bob Johnson', 'bob@example.com', 'Editor'],
            ]"
            striped
            hover
            :actions="['edit', 'delete', 'print', 'remove']"
            variant="bordered"
        />
    </section>
</div>
@endsection
