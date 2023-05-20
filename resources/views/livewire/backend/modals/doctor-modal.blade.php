<x-backend.modal form-action="add">
    <x-slot name="title">
        Add Doctor
    </x-slot>

    <x-slot name="content">
        <div class="grid-cols-3 gap-2 sm:grid">
            <x-input wire:model='name' name="name" label="Name" type="text" />

            <x-input wire:model='email' name="email" label="Email" type="email" />

            <x-native-select label="Select Branch" placeholder="Select Branch" :options="$branches" wire:model="branch_id"
                option-label="landmark" option-value="id" />

            <x-native-select label="Select department" placeholder="Select department" :options="$departments"
                wire:model="department_id" option-label="title" option-value="id" />

            <x-input wire:model='reg_no' name="reg_no" label="Registration No." type="text" />

            <x-input wire:model='specialist' name="specialist" label="Specialist" type="text" />

            <x-input wire:model='opd_reg_fee' name="opd_reg_fee" label="OPD Registration Fee" type="text" />

            <x-input wire:model='ipd_reg_fee' name="ipd_reg_fee" label="IPD Registration Fee" type="text" />

            <x-input wire:model='opd_consultation_fee' name="opd_consultation_fee" label="OPD Consultation Fee"
                type="text" />

            <x-input wire:model='ipd_consultation_fee' name="ipd_consultation_fee" label="IPD Consultation Fee"
                type="text" />

            <x-input wire:model='fb' name="fb" label="Facebook Page" type="text" />

            <x-input wire:model='twitter' name="twitter" label="Twitter" type="text" />

            <x-input wire:model='instagram' name="instagram" label="Instagram Page" type="text" />

            <x-input wire:model='gmb' name="gmb" label="Google My Business" type="text" />
        </div>
    </x-slot>

    <x-slot name="buttons">
        <button class="btn btn-primary">Save</button>
    </x-slot>
</x-backend.modal>
