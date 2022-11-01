<?php

namespace App\Http\Livewire\Backend\Tables;

use App\Models\Bed;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class BedTable extends LivewireDatatable
{
    public $model = Bed::class;
    public $exportable = true;

    public function builder()
    {
        return Bed::query();
    }

    public function columns()
    {
        return [
            Column::checkbox()
                ->label('Checkbox'),

            Column::index($this)
                ->unsortable(),

            Column::name('type')
                ->filterable(),

            Column::name('floor')
                ->filterable()
                ->searchable(),

            NumberColumn::name('count')
                ->filterable(),

            NumberColumn::name('charges')
                ->filterable(),

            DateColumn::name('created_at')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('backend.pages.beds.bed-actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
