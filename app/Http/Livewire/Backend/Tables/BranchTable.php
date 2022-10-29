<?php

namespace App\Http\Livewire\Backend\Tables;

use App\Models\Branch;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class BranchTable extends LivewireDatatable
{
    public $model = Branch::class;
    public $exportable = true;

    public function builder()
    {
        return Branch::query()->with('areas');
    }

    public function columns()
    {
        return [
            Column::checkbox()
                ->label('Checkbox'),

            Column::index($this)
                ->unsortable(),

            Column::name('areas.name')
                ->filterable()
                ->label('Area Name'),

            Column::name('address')
                ->truncate(50)
                ->searchable(),

            Column::name('landmark')
                ->filterable(),

            Column::name('manager_name')
                ->filterable(),

            Column::name('manager_contact_no')
                ->filterable(),

            Column::name('manager_email')
                ->filterable(),

            Column::name('branch_number')
                ->filterable(),

            DateColumn::name('created_at')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('backend.pages.settings.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
