<?php

namespace App\Http\Livewire\Backend\Tables;

use App\Models\DoctorSchedule;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\TimeColumn;

class DoctorScheduleTable extends LivewireDatatable
{
    public $model = DoctorSchedule::class;
    public $exportable = true;

    public function builder()
    {
        return DoctorSchedule::query()->with('user');
    }

    public function columns()
    {
        return [
            Column::checkbox()
                ->label('Checkbox'),

            Column::index($this)
                ->unsortable(),

            Column::name('user.name')
                ->searchable()
                ->filterable(),

            Column::name('day')
                ->searchable()
                ->filterable(),

            NumberColumn::name('per_patient_time')
                ->filterable(),

            TimeColumn::name('from')
                ->searchable()
                ->filterable(),

            TimeColumn::name('till')
                ->searchable()
                ->filterable(),

            DateColumn::name('created_at')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('backend.pages.doctors.doctor-schedule-actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
