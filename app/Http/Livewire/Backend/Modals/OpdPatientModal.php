<?php

namespace App\Http\Livewire\Backend\Modals;

use App\Models\OpdPatient;
use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class OpdPatientModal extends ModalComponent
{
    // Set Values
    public $opd_patient_id, $patients, $doctors;
    // Modal Values
    public $patient_id, $doctor_id, $date, $time, $description;

    public function mount()
    {
        if (!empty($this->opd_patient_id)) {
            $data = OpdPatient::where('id', $this->opd_patient_id)->first();
            $this->patient_id = $data->patient_id;
            $this->doctor_id = $data->doctor_id;
            $this->date = $data->date;
            $this->time = $data->time;
            $this->description = $data->description;
        }
        $data1 = User::whereHas('role', function ($query) {
            $query->where('title', 'Doctor');
        })->pluck('name', 'id');

        $this->doctors = collect($data1)->map(function ($data1, $key) {
            return ['name' => $data1, 'id' => $key];
        })->toArray();

        $data2 = User::whereHas('role', function ($query) {
            $query->where('title', 'Patient');
        })->pluck('name', 'id');

        $this->patients = collect($data2)->map(function ($data2, $key) {
            return ['name' => $data2, 'id' => $key];
        })->toArray();
    }

    protected $rules = [
        'patient_id' => '',
        'doctor_id' => '',
        'date' => '',
        'time' => '',
        'description' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function add()
    {
        $validatedData = $this->validate();

        if (!empty($this->opd_patient_id)) {
            OpdPatient::findOrFail($this->opd_patient_id)->update($validatedData);
        } else {
            OpdPatient::create($validatedData);
        }

        $this->emit('refreshLivewireDatatable');

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.backend.modals.opd-patient-modal');
    }
}
