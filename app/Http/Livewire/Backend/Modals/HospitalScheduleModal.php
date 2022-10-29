<?php

namespace App\Http\Livewire\Backend\Modals;

use App\Models\HospitalSchedule;
use LivewireUI\Modal\ModalComponent;

class HospitalScheduleModal extends ModalComponent
{
    // Set Data
    public $hospital_schedule_id, $branches;
    // Model Keys
    public $day, $start_time, $end_time, $branch_id;

    public function mount()
    {
        $this->branches = getKeyValuesWithMap('Branch', 'landmark', 'id');

        if (!empty($this->hospital_schedule_id)) {
            $data = HospitalSchedule::findOrFail($this->hospital_schedule_id);
            $this->day = $data->day;
            $this->start_time = $data->start_time;
            $this->end_time = $data->end_time;
            $this->branch_id = $data->branch_id;
        }
    }

    protected $rules = [
        'day' => '',
        'start_time' => '',
        'end_time' => '',
        'branch_id' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function add()
    {
        $validatedData = $this->validate();

        if (!empty($this->hospital_schedule_id)) {
            HospitalSchedule::findOrFail($this->hospital_schedule_id)->update($validatedData);
        } else {
            HospitalSchedule::create($validatedData);
        }

        $this->emit('refreshLivewireDatatable');

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.backend.modals.hospital-schedule-modal');
    }
}
