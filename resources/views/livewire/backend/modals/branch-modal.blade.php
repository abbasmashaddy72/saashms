<x-backend.modal form-action="add">
    <x-slot name="title">
        Add Branch
    </x-slot>

    <x-slot name="content">
        <x-select label="Search an Area" wire:model.defer="area" placeholder="Select an Area" :async-data="route('api.area-search')"
            option-label="name" option-value="id" />

        <x-input wire:model='landmark' name="landmark" label="Landmark" type="text" />

        <x-input wire:model='manager_name' name="manager_name" label="Manager Name" type="text" />

        <x-input wire:model='manager_contact_no' name="manager_contact_no" label="Manager Contact No." type="text" />

        <x-input wire:model='manager_email' name="manager_email" label="Manager Email" type="text" />

        <x-input wire:model='branch_number' name="branch_number" label="Branch Contact No." type="text" />

        <x-textarea wire:model='address' name="address" label="Address" />
    </x-slot>

    <x-slot name="buttons">
        <button class="btn btn-primary">Save</button>
    </x-slot>
</x-backend.modal>
