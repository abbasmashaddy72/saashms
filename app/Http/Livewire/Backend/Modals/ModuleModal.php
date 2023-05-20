<?php

namespace App\Http\Livewire\Backend\Modals;

use App\Models\Module;
use LivewireUI\Modal\ModalComponent;

class ModuleModal extends ModalComponent
{
    // Set Data
    public $module_id;
    // Model Keys
    public $name, $status;

    public function mount()
    {
        $data = Module::findOrFail($this->module_id);
        $this->name = $data->name;
        $this->status = $data->status;
    }

    protected $rules = [
        'name' => '',
        'status' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function add()
    {
        $validatedData = $this->validate();
        $validatedData['changed_by'] = auth()->user()->id;

        Module::findOrFail($this->module_id)->update($validatedData);

        $this->emit('refreshLivewireDatatable');

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.backend.modals.module-modal');
    }
}
