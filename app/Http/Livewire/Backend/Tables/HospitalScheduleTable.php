<?php

namespace App\Http\Livewire\Backend\Tables;

use App\Models\HospitalSchedule;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\TimeColumn;

class HospitalScheduleTable extends LivewireDatatable
{
    public $model = HospitalSchedule::class;
    public $exportable = true;

    public function builder()
    {
        return HospitalSchedule::query()->with('branches');
    }

    public function columns()
    {
        return [
            Column::checkbox()
                ->label('Checkbox'),

            Column::index($this)
                ->unsortable(),

            Column::name('branches.landmark')
                ->searchable()
                ->filterable()
                ->label('Area Name'),

            Column::name('day')
                ->truncate(50)
                ->searchable(),

            TimeColumn::name('start_time')
                ->searchable()
                ->filterable(),

            TimeColumn::name('end_time')
                ->searchable()
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('backend.pages.settings.hospital-schedule-actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
