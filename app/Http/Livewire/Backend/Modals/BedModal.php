<?php

namespace App\Http\Livewire\Backend\Modals;

use App\Models\Bed;
use App\Models\BedList;
use LivewireUI\Modal\ModalComponent;

class BedModal extends ModalComponent
{
    // Set Data
    public $bed_id;
    // Model Keys
    public $type, $floor, $count, $charges, $prefix;

    public function mount()
    {
        if (!empty($this->bed_id)) {
            $data = Bed::findOrFail($this->bed_id);
            $this->type = $data->type;
            $this->floor = $data->floor;
            $this->count = $data->count;
            $this->charges = $data->charges;
            $this->prefix = $data->prefix;
        }
    }

    protected $rules = [
        'type' => '',
        'floor' => '',
        'count' => '',
        'charges' => '',
        'prefix' => ''
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function add()
    {
        $validatedData = $this->validate();

        if (!empty($this->bed_id)) {
            Bed::findOrFail($this->bed_id)->update($validatedData);
            for ($i = 1; $i <= $validatedData['count']; $i++) {
                BedList::updateOrCreate([
                    'bed_id' => $this->bed_id,
                    'bed_no' => $validatedData['prefix'] . '-' . $i
                ]);
            }
        } else {
            $bed = Bed::create($validatedData);
            for ($i = 1; $i <= $validatedData['count']; $i++) {
                BedList::create([
                    'bed_id' => $bed->id,
                    'bed_no' => $validatedData['prefix'] . '-' . $i
                ]);
            }
        }

        $this->emit('refreshLivewireDatatable');

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.backend.modals.bed-modal');
    }
}
