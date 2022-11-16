<x-backend-layout>
    <x-slot name="breadcrumb">{!! Breadcrumbs::render('blood-manage') !!}</x-slot>
    <div class="col-span-12 lg:col-span-4">
        <div class="pr-1">
            <div class="p-2 box">
                <ul class="nav nav-pills" role="tablist">
                    <li id="blood-donation-tab" class="flex-1 nav-item" role="presentation">
                        <button class="w-full py-2 nav-link active" data-tw-toggle="pill" data-tw-target="#blood-donation"
                            type="button" role="tab" aria-controls="blood-donation" aria-selected="true">Blood
                            Donation</button>
                    </li>
                    <li id="blood-issue-tab" class="flex-1 nav-item" role="presentation">
                        <button class="w-full py-2 nav-link" data-tw-toggle="pill" data-tw-target="#blood-issue"
                            type="button" role="tab" aria-controls="blood-issue" aria-selected="false">Blood
                            Issue
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div id="blood-donation" class="tab-pane active" role="tabpanel" aria-labelledby="blood-donation-tab">
                <div class="grid grid-cols-12 gap-5 mt-5">

                    <div class="col-span-12">
                        <div class="flex items-center justify-between mt-20 lg:mt-8">
                            <div class="mr-auto text-lg font-medium">
                                {{ 'Blood Donation' }}
                            </div>
                            <div class="sm:w-auto sm:mt-0">
                                <button onclick="Livewire.emit('openModal', 'backend.modals.blood-donation-modal')"
                                    class="mr-2 shadow-md btn btn-primary">{{ 'Add' }}</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12">
                        @livewire('backend.tables.blood-donation-table')
                    </div>

                </div>
            </div>
            <div id="blood-issue" class="tab-pane" role="tabpanel" aria-labelledby="blood-issue-tab">
                <div class="grid grid-cols-12 gap-5">

                    <div class="col-span-12">
                        <div class="flex items-center justify-between mt-20 lg:mt-8">
                            <div class="mr-auto text-lg font-medium">
                                {{ 'Blood Issue' }}
                            </div>
                            <div class="sm:w-auto sm:mt-0">
                                <button onclick="Livewire.emit('openModal', 'backend.modals.blood-issue-modal')"
                                    class="mr-2 shadow-md btn btn-primary">{{ 'Add' }}</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12">
                        @livewire('backend.tables.blood-issue-table')
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-backend-layout>
