<?php

namespace App\Http\Livewire\Backend\Modals;

use App\Models\Branch;
use LivewireUI\Modal\ModalComponent;

class BranchModal extends ModalComponent
{
    // Set Data
    public $branch_id;
    // Model Keys
    public $landmark, $manager_name, $manager_contact_no, $manager_email, $branch_number, $address;

    public function mount()
    {
        if (!empty($this->branch_id)) {
            $data = Branch::findOrFail($this->branch_id);
            $this->landmark = $data->landmark;
            $this->manager_name = $data->manager_name;
            $this->manager_contact_no = $data->manager_contact_no;
            $this->manager_email = $data->manager_email;
            $this->branch_number = $data->branch_number;
            $this->address = $data->address;
        }
    }

    protected $rules = [
        'landmark' => '',
        'manager_name' => '',
        'manager_contact_no' => '',
        'manager_email' => '',
        'branch_number' => '',
        'address' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function add()
    {
        $validatedData = $this->validate();

        if (!empty($this->branch_id)) {
            Branch::findOrFail($this->branch_id)->update($validatedData);
        } else {
            $validatedData['area_id'] = 1;
            Branch::create($validatedData);
        }

        $this->emit('refreshLivewireDatatable');

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.backend.modals.branch-modal');
    }
}
