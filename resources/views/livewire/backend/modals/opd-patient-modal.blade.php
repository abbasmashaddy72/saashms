<x-backend.modal form-action="add">
    <x-slot name="title">
        Add OPD Patient
    </x-slot>

    <x-slot name="content">
        <x-native-select label="Search Patient" wire:model="patient_id" placeholder="Select Patient" :options="$patients"
            option-label="name" option-value="id" />

        <x-native-select label="Search Doctor" wire:model="doctor_id" placeholder="Select Doctor" :options="$doctors"
            option-label="name" option-value="id" />

        <x-input wire:model='date' name="date" label="Date" type="date" />

        <x-input wire:model='time' name="time" label="Time" type="time" />

        <x-textarea wire:model='description' name="description" label="Description" type="time" />
    </x-slot>

    <x-slot name="buttons">
        <button class="btn btn-primary">Save</button>
    </x-slot>
</x-backend.modal>
