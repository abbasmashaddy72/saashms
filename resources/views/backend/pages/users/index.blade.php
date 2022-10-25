<x-backend-layout>
    <div class="grid grid-cols-12 gap-5 mt-5">

        <x-slot name="breadcrumb">{!! Breadcrumbs::render('users') !!}</x-slot>

        <div class="col-span-12">
            @livewire('backend.tables.users-table')
        </div>

    </div>
</x-backend-layout>
