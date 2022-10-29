<x-backend.modal form-action="add">
    <x-slot name="title">
        Add Branch
    </x-slot>

    <x-slot name="content">
        <x-native-select label="Select Day" placeholder="Select Day" :options="['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']" wire:model="day" />

        <x-input wire:model='start_time' name="start_time" label="Start Time" type="time" />

        <x-input wire:model='end_time' name="end_time" label="End Time" type="time" />

        <x-native-select label="Select Branch" placeholder="Select Branch" :options="$branches" wire:model="branch_id"
            option-label="landmark" option-value="id" />
    </x-slot>

    <x-slot name="buttons">
        <button class="btn btn-primary">Save</button>
    </x-slot>
</x-backend.modal>
