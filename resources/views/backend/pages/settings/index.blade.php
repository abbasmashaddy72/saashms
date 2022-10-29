<x-backend-layout>
    <div class="col-span-12 lg:col-span-4">
        <div class="pr-1">
            <div class="p-2 box">
                <ul class="nav nav-pills" role="tablist">
                    <li id="settings-tab" class="flex-1 nav-item" role="presentation">
                        <button class="w-full py-2 nav-link active" data-tw-toggle="pill" data-tw-target="#settings"
                            type="button" role="tab" aria-controls="settings"
                            aria-selected="true">Settings</button>
                    </li>
                    <li id="branches-tab" class="flex-1 nav-item" role="presentation">
                        <button class="w-full py-2 nav-link" data-tw-toggle="pill" data-tw-target="#branches"
                            type="button" role="tab" aria-controls="branches" aria-selected="false">Branches
                        </button>
                    </li>
                    <li id="modules-tab" class="flex-1 nav-item" role="presentation">
                        <button class="w-full py-2 nav-link" data-tw-toggle="pill" data-tw-target="#modules"
                            type="button" role="tab" aria-controls="modules" aria-selected="false">Modules
                        </button>
                    </li>
                    <li id="timings-tab" class="flex-1 nav-item" role="presentation">
                        <button class="w-full py-2 nav-link" data-tw-toggle="pill" data-tw-target="#timings"
                            type="button" role="tab" aria-controls="timings" aria-selected="false">Schedule
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div id="settings" class="tab-pane active" role="tabpanel" aria-labelledby="settings-tab">
                <div class="grid grid-cols-12 gap-5 mt-5">

                    <x-slot name="breadcrumb">{!! Breadcrumbs::render('settings') !!}</x-slot>

                    <div class="col-span-12">
                        @livewire('backend.forms.settings-form')
                    </div>

                </div>
            </div>
            <div id="branches" class="tab-pane" role="tabpanel" aria-labelledby="branches-tab">
                <div class="grid grid-cols-12 gap-5">

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
            </div>
            <div id="modules" class="tab-pane" role="tabpanel" aria-labelledby="modules-tab">
                Modiles
            </div>
            <div id="timings" class="tab-pane" role="tabpanel" aria-labelledby="timings-tab">
                <div class="grid grid-cols-12 gap-5">

                    <div class="col-span-12">
                        <div class="flex items-center justify-between mt-20 lg:mt-8">
                            <div class="mr-auto text-lg font-medium">
                                {{ 'Schedules' }}
                            </div>
                            <div class="sm:w-auto sm:mt-0">
                                <button onclick="Livewire.emit('openModal', 'backend.modals.hospital-schedule-modal')"
                                    class="mr-2 shadow-md btn btn-primary">{{ 'Add' }}</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12">
                        @livewire('backend.tables.hospital-schedule-table')
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-backend-layout>
