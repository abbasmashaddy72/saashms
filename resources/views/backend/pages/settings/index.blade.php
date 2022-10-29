<x-backend-layout>
    <div class="grid grid-cols-12 gap-5 mt-5">

        <x-slot name="breadcrumb">{!! Breadcrumbs::render('settings') !!}</x-slot>

        <div class="col-span-12">
            @livewire('backend.forms.settings-form')
        </div>

        <div class="col-span-12">
            <div class="flex items-center justify-between mt-20 lg:mt-8">
                <div class="mr-auto text-lg font-medium">
                    {{ 'Branches' }}
                </div>
                <div class="sm:w-auto sm:mt-0">
                    <button onclick="Livewire.emit('openModal', 'backend.modals.branch-modal')"
                        class="mr-2 shadow-md btn btn-primary">{{ 'Add' }}</button>
                </div>
            </div>
        </div>

        <div class="col-span-12">
            @livewire('backend.tables.branch-table')
        </div>

    </div>
</x-backend-layout>
