<x-backend-layout container_top="true">
    <div class="grid grid-cols-12 gap-5 mt-5">

        <x-slot name="breadcrumb">{!! Breadcrumbs::render('patients') !!}</x-slot>

        <x-slot name="right_button_wire">
            <div class="sm:w-auto sm:mt-0">
                <button onclick="Livewire.emit('openModal', 'backend.modals.patient-modal')"
                    class="mr-2 shadow-md btn btn-primary">{{ 'Add' }}</button>
            </div>
        </x-slot>

        <div class="col-span-12">
            @livewire('backend.tables.patient-table')
        </div>

    </div>
</x-backend-layout>
