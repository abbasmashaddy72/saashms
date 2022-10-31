<x-backend.modal form-action="add">
    <x-slot name="title">
        Add Branch
    </x-slot>

    <x-slot name="content">
        <x-native-select label="Search Doctor" wire:model="user_id" placeholder="Select Doctor" :options="$doctors"
            option-label="name" option-value="id" />

        <x-native-select label="Select Day" placeholder="Select Day" :options="['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']" wire:model="day" />

        <x-input wire:model='per_patient_time' name="per_patient_time" label="Per Patient Time" type="number" />

        <x-input wire:model='from' name="from" label="From" type="time" />

        <x-input wire:model='till' name="till" label="Till" type="time" />
    </x-slot>

    <x-slot name="buttons">
        <button class="btn btn-primary">Save</button>
    </x-slot>
</x-backend.modal>
