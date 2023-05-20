<x-backend-layout>
    <x-slot name="breadcrumb">{!! Breadcrumbs::render('bed-manage') !!}</x-slot>

    <div class="grid grid-cols-12 gap-5">

        <div class="col-span-12">
            <div class="flex items-center justify-between mt-20 lg:mt-8">
                <div class="mr-auto text-lg font-medium">
                    {{ 'Room & Beds Count' }}
                </div>
                <div class="sm:w-auto sm:mt-0">
                    <button onclick="Livewire.emit('openModal', 'backend.modals.bed-modal')"
                        class="mr-2 shadow-md btn btn-primary">{{ 'Add' }}</button>
                </div>
            </div>
        </div>

        <div class="col-span-12">
            @livewire('backend.tables.bed-table')
        </div>

    </div>
</x-backend-layout>
