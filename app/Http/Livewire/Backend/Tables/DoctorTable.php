<?php

namespace App\Http\Livewire\Backend\Tables;

use App\Models\User;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class DoctorTable extends LivewireDatatable
{
    public $model = User::class;
    public $exportable = true;

    public function builder()
    {
        return User::query()->with('doctor')->whereHas('role', function ($query) {
            $query->where('title', 'Doctor');
        });
    }

    public function columns()
    {
        return [
            Column::checkbox()
                ->label('Checkbox'),

            Column::index($this)
                ->unsortable(),

            Column::name('name')
                ->searchable()
                ->filterable(),

            Column::name('email')
                ->searchable()
                ->filterable(),

            Column::name('doctor.specialist')
                ->searchable()
                ->filterable(),

            Column::name('doctor.reg_no')
                ->searchable()
                ->filterable(),

            Column::name('doctor.opd_reg_fee')
                ->searchable()
                ->filterable(),

            Column::name('doctor.ipd_reg_fee')
                ->searchable()
                ->filterable(),

            Column::name('doctor.ipd_consultation_fee')
                ->searchable()
                ->filterable(),

            Column::name('doctor.opd_consultation_fee')
                ->searchable()
                ->filterable(),

            DateColumn::name('created_at')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('backend.pages.doctors.doctor-actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
