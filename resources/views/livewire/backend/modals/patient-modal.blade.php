<x-backend.modal form-action="add">
    <x-slot name="title">
        Add Patient
    </x-slot>

    <x-slot name="content">
        <div class="grid-cols-3 gap-2 sm:grid">
            <x-input wire:model='name' name="name" label="Name" type="text" />

            <x-input wire:model='email' name="email" label="Email" type="email" />

            <x-native-select label="Select Branch" placeholder="Select Branch" :options="$branches" wire:model="branch_id"
                option-label="landmark" option-value="id" />

            <x-native-select label="Select gender" placeholder="Select gender" :options="$genders" wire:model="gender" />

            <x-input wire:model='dob' name="dob" label="Date of Birth" type="date" />

            <x-input wire:model='qualification' name="qualification" label="Qualification" type="text" />

            <x-input wire:model='designation' name="designation" label="Designation" type="text" />

            <x-native-select label="Select Blood Group" placeholder="Select Blood Group" :options="$blood_groups"
                wire:model="blood_group" />

            <x-input wire:model='contact_no' name="contact_no" label="Contact No." type="text" />

            <x-textarea wire:model='about' name="about" label="About" />

            <x-textarea wire:model='address' name="address" label="Address" />

            <x-native-select label="Select Area" placeholder="Select Area" :options="$areas" wire:model="area_id"
                option-label="name" option-value="id" />

            <x-toggle wire:model="status" label="Status" />
        </div>
    </x-slot>

    <x-slot name="buttons">
        <button class="btn btn-primary">Save</button>
    </x-slot>
</x-backend.modal>
