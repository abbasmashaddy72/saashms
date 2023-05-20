<x-backend.modal form-action="add">
    <x-slot name="title">
        Add Bed
    </x-slot>

    <x-slot name="content">
        <x-input wire:model='type' name="type" label="Type" type="text" />

        <x-input wire:model='floor' name="floor" label="Floor" type="text" />

        <x-input wire:model='count' name="count"
            label="Count (Please Note Don't Decrease the Count but You Can Increase it.)" type="number" />

        <x-input wire:model='charges' name="charges" label="Charges" type="number" />

        <x-input wire:model='prefix' name="prefix" label="Prefix" type="text" />
    </x-slot>

    <x-slot name="buttons">
        <button class="btn btn-primary">Save</button>
    </x-slot>
</x-backend.modal>
