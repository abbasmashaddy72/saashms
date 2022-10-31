<?php

namespace App\Http\Livewire\Backend\Tables;

use App\Models\User;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class PatientTable extends LivewireDatatable
{
    public $model = User::class;
    public $exportable = true;

    public function builder()
    {
        return User::query()->with('area')->whereHas('role', function ($query) {
            $query->where('title', 'Patient');
        });
    }

    public function genders()
    {
        return getEnum('users', 'gender');
    }

    public function bloodGroups()
    {
        return getEnum('users', 'blood_group');
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

            Column::name('area.name')
                ->searchable()
                ->filterable(),

            Column::name('email')
                ->searchable()
                ->filterable(),

            Column::name('gender')
                ->searchable()
                ->filterable($this->genders()),

            DateColumn::name('dob')
                ->searchable()
                ->filterable(),

            Column::name('qualification')
                ->searchable()
                ->filterable(),

            Column::name('designation')
                ->searchable()
                ->filterable(),

            Column::name('blood_group')
                ->searchable()
                ->filterable($this->bloodGroups()),

            Column::name('contact_no')
                ->searchable()
                ->filterable(),

            BooleanColumn::name('status')
                ->filterable(),

            DateColumn::name('created_at')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('backend.pages.patients.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
