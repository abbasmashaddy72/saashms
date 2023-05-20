<?php

namespace App\Http\Livewire\Backend\Tables;

use App\Models\OpdPatient;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\TimeColumn;

class OpdPatientTable extends LivewireDatatable
{
    public $model = OpdPatient::class;
    public $exportable = true;

    public function builder()
    {
        return OpdPatient::query();
    }

    public function columns()
    {
        return [
            Column::checkbox()
                ->label('Checkbox'),

            Column::index($this)
                ->unsortable(),

            Column::name('patient.name')
                ->searchable()
                ->label('Patient Name')
                ->filterable(),

            DateColumn::name('date')
                ->searchable()
                ->filterable(),

            TimeColumn::name('time')
                ->searchable()
                ->filterable(),

            Column::name('doctor.name')
                ->searchable()
                ->label('Doctor Name')
                ->filterable(),

            Column::name('description')
                ->searchable()
                ->truncate(50)
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('backend.pages.opd-patients.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
