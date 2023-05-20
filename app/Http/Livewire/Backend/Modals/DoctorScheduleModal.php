<?php

namespace App\Http\Livewire\Backend\Modals;

use App\Models\DoctorSchedule;
use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class DoctorScheduleModal extends ModalComponent
{
    // Set Values
    public $doctor_schedule_id, $doctors;
    // Model Values
    public $user_id, $per_patient_time, $day, $from, $till;

    public function mount()
    {
        if (!empty($this->doctor_schedule_id)) {
            $data = DoctorSchedule::findOrFail($this->doctor_schedule_id);
            $this->user_id = $data->user_id;
            $this->per_patient_time = $data->per_patient_time;
            $this->day = $data->day;
            $this->from = $data->from;
            $this->till = $data->till;
        }
        $data1 = User::whereHas('role', function ($query) {
            $query->where('title', 'Doctor');
        })->pluck('name', 'id');

        $this->doctors = collect($data1)->map(function ($data1, $key) {
            return ['name' => $data1, 'id' => $key];
        })->toArray();
    }

    protected $rules = [
        'user_id' => '',
        'per_patient_time' => '',
        'day' => '',
        'from' => '',
        'till' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function add()
    {
        $validatedData = $this->validate();

        if (!empty($this->doctor_schedule_id)) {
            DoctorSchedule::findOrFail($this->doctor_schedule_id)->update($validatedData);
        } else {
            DoctorSchedule::create($validatedData);
        }

        $this->emit('refreshLivewireDatatable');

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.backend.modals.doctor-schedule-modal');
    }
}
