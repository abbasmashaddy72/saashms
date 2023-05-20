<?php

namespace App\Http\Livewire\Backend\Tables;

use App\Models\Module;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ModuleTable extends LivewireDatatable
{
    public $model = Module::class;
    public $exportable = true;

    public function builder()
    {
        return Module::query()->with('changedBy');
    }

    public function columns()
    {
        return [
            Column::checkbox()
                ->label('Checkbox'),

            Column::index($this)
                ->unsortable(),

            Column::name('changedBy.name')
                ->searchable()
                ->filterable()
                ->label('Change By Name'),

            Column::name('name')
                ->filterable()
                ->searchable(),

            BooleanColumn::name('status'),

            Column::callback(['id'], function ($id) {
                return view('backend.pages.settings.module-actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
