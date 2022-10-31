<x-backend.modal form-action="add">
    <x-slot name="title">
        Add Branch
    </x-slot>

    <x-slot name="content">
        <x-input wire:model='title' name="title" label="Name" type="text" />

        <x-textarea wire:model='description' name="description" label="Description" />

        <x-toggle wire:model="status" label="Status" />
    </x-slot>

    <x-slot name="buttons">
        <button class="btn btn-primary">Save</button>
    </x-slot>
</x-backend.modal>
