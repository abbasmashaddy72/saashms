<x-backend-layout>
    <x-slot name="breadcrumb">{!! Breadcrumbs::render('doctors') !!}</x-slot>
    <div class="col-span-12 lg:col-span-4">
        <div class="pr-1">
            <div class="p-2 box">
                <ul class="nav nav-pills" role="tablist">
                    <li id="doctors-tab" class="flex-1 nav-item" role="presentation">
                        <button class="w-full py-2 nav-link active" data-tw-toggle="pill" data-tw-target="#doctors"
                            type="button" role="tab" aria-controls="doctors" aria-selected="true">Doctors</button>
                    </li>
                    <li id="department-tab" class="flex-1 nav-item" role="presentation">
                        <button class="w-full py-2 nav-link" data-tw-toggle="pill" data-tw-target="#department"
                            type="button" role="tab" aria-controls="department" aria-selected="false">Departments
                        </button>
                    </li>
                    <li id="doctor-schedule-tab" class="flex-1 nav-item" role="presentation">
                        <button class="w-full py-2 nav-link" data-tw-toggle="pill" data-tw-target="#doctor-schedule"
                            type="button" role="tab" aria-controls="doctor-schedule" aria-selected="false">Doctor
                            Schedules
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div id="doctors" class="tab-pane active" role="tabpanel" aria-labelledby="doctors-tab">
                <div class="grid grid-cols-12 gap-5 mt-5">

                    <div class="col-span-12">
                        <div class="flex items-center justify-between mt-20 lg:mt-8">
                            <div class="mr-auto text-lg font-medium">
                                {{ 'Doctors' }}
                            </div>
                            <div class="sm:w-auto sm:mt-0">
                                <button onclick="Livewire.emit('openModal', 'backend.modals.doctor-modal')"
                                    class="mr-2 shadow-md btn btn-primary">{{ 'Add' }}</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12">
                        @livewire('backend.tables.doctor-table')
                    </div>

                </div>
            </div>
            <div id="department" class="tab-pane" role="tabpanel" aria-labelledby="department-tab">
                <div class="grid grid-cols-12 gap-5">

                    <div class="col-span-12">
                        <div class="flex items-center justify-between mt-20 lg:mt-8">
                            <div class="mr-auto text-lg font-medium">
                                {{ 'Department' }}
                            </div>
                            <div class="sm:w-auto sm:mt-0">
                                <button onclick="Livewire.emit('openModal', 'backend.modals.department-modal')"
                                    class="mr-2 shadow-md btn btn-primary">{{ 'Add' }}</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12">
                        @livewire('backend.tables.department-table')
                    </div>

                </div>
            </div>
            <div id="doctor-schedule" class="tab-pane" role="tabpanel" aria-labelledby="doctor-schedule-tab">
                <div class="grid grid-cols-12 gap-5">

                    <div class="col-span-12">
                        <div class="flex items-center justify-between mt-20 lg:mt-8">
                            <div class="mr-auto text-lg font-medium">
                                {{ 'Schedules' }}
                            </div>
                            <div class="sm:w-auto sm:mt-0">
                                <button onclick="Livewire.emit('openModal', 'backend.modals.doctor-schedule-modal')"
                                    class="mr-2 shadow-md btn btn-primary">{{ 'Add' }}</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12">
                        @livewire('backend.tables.doctor-schedule-table')
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-backend-layout>
