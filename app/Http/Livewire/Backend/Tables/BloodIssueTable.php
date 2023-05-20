<?php

namespace App\Http\Livewire\Backend\Tables;

use App\Models\BloodIssue;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class BloodIssueTable extends LivewireDatatable
{
    public $model = BloodIssue::class;
    public $exportable = true;

    public function builder()
    {
        return BloodIssue::query()->with('issued_patient');
    }

    public function columns()
    {
        return [
            Column::checkbox()
                ->label('Checkbox'),

            Column::index($this)
                ->unsortable(),

            Column::name('issued_patient.name')
                ->filterable()
                ->label('Issued Patient Name'),

            Column::name('doctor.name')
                ->filterable()
                ->label('Doctor Name'),

            Column::name('blood_donation.donated_patient.name')
                ->filterable()
                ->label('Donated Name'),

            DateColumn::name('blood_donation.collected_on')
                ->filterable(),

            DateColumn::name('issue_date')
                ->filterable(),

            NumberColumn::name('count')
                ->filterable(),

            Column::name('issued_patient.blood_group')
                ->filterable(),
            // Column::name('manager_name')
            //     ->filterable(),

            // Column::name('manager_contact_no')
            //     ->filterable(),

            // Column::name('manager_email')
            //     ->filterable(),

            // Column::name('branch_number')
            //     ->filterable(),

            DateColumn::name('created_at')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('backend.pages.settings.branch-actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
