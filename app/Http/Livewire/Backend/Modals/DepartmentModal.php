<?php

namespace App\Http\Livewire\Backend\Modals;

use App\Models\Department;
use LivewireUI\Modal\ModalComponent;

class DepartmentModal extends ModalComponent
{
    // Set Values
    public $department_id;
    // Model Values
    public $title, $description, $status;

    public function mount()
    {
        if (!empty($this->department_id)) {
            $data = Department::findOrFail($this->department_id);
            $this->title = $data->title;
            $this->description = $data->description;
            $this->status = $data->status;
        }
    }

    protected $rules = [
        'title' => '',
        'description' => '',
        'status' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function add()
    {
        $validatedData = $this->validate();

        if (!empty($this->department_id)) {
            Department::findOrFail($this->department_id)->update($validatedData);
        } else {
            Department::create($validatedData);
        }

        $this->emit('refreshLivewireDatatable');

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.backend.modals.department-modal');
    }
}
