<?php

namespace App\Http\Livewire\Backend\Modals;

use App\Models\Doctor;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use LivewireUI\Modal\ModalComponent;

class DoctorModal extends ModalComponent
{
    // Set Values
    public $user_id, $departments, $branches, $doctor_id;
    // Doctor Model Values
    public $department_id, $branch_id, $reg_no, $specialist, $opd_reg_fee, $ipd_reg_fee, $opd_consultation_fee, $ipd_consultation_fee, $fb, $twitter, $instagram, $gmb;
    // User Model Values
    public $name, $email;

    public static function modalMaxWidth(): string
    {
        return '7xl';
    }

    public function mount()
    {
        if (!empty($this->user_id)) {
            $data = User::where('id', $this->user_id)->with('doctor')->first();
            $this->name = $data->name;
            $this->email = $data->email;
            $this->doctor_id = $data->doctor->id;
            $this->department_id = $data->doctor->department_id;
            $this->branch_id = $data->branch_id;
            $this->reg_no = $data->doctor->reg_no;
            $this->specialist = $data->doctor->specialist;
            $this->opd_reg_fee = $data->doctor->opd_reg_fee;
            $this->ipd_reg_fee = $data->doctor->ipd_reg_fee;
            $this->opd_consultation_fee = $data->doctor->opd_consultation_fee;
            $this->ipd_consultation_fee = $data->doctor->ipd_consultation_fee;
            $this->fb = $data->doctor->fb;
            $this->twitter = $data->doctor->twitter;
            $this->instagram = $data->doctor->instagram;
            $this->gmb = $data->doctor->gmb;
        }
        $this->departments = getKeyValuesWithMap('Department', 'title', 'id');
        $this->branches = getKeyValuesWithMap('Branch', 'landmark', 'id');
    }

    protected $rules = [
        'name' => '',
        'email' => '',
        'department_id' => '',
        'branch_id' => '',
        'reg_no' => '',
        'specialist' => '',
        'opd_reg_fee' => '',
        'ipd_reg_fee' => '',
        'opd_consultation_fee' => '',
        'ipd_consultation_fee' => '',
        'fb' => '',
        'twitter' => '',
        'instagram' => '',
        'gmb' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function add()
    {
        $validatedData = $this->validate();

        if (!empty($this->user_id)) {
            $validatedData1['name'] = $validatedData['name'];
            $validatedData1['email'] = $validatedData['email'];
            $validatedData1['branch_id'] = $validatedData['branch_id'];
            $validatedData1['password'] = Hash::make(substr($validatedData['name'], 0, 3) . '@123');
            unset($validatedData['name']);
            unset($validatedData['email']);
            unset($validatedData['branch_id']);
            $user = User::where('id', $this->user_id)->update($validatedData1);
            $role = Role::where('title', 'Doctor')->first();
            Doctor::where('id', $this->doctor_id)->update($validatedData);
        } else {
            $validatedData1['name'] = $validatedData['name'];
            $validatedData1['email'] = $validatedData['email'];
            $validatedData1['branch_id'] = $validatedData['branch_id'];
            $validatedData1['password'] = Hash::make(substr($validatedData['name'], 0, 3) . '@123');
            unset($validatedData['name']);
            unset($validatedData['email']);
            unset($validatedData['branch_id']);
            $user = User::create($validatedData1);
            $role = Role::where('title', 'Doctor')->first();
            RoleUser::create([
                'user_id' => $user->id,
                'role_id' => $role->id
            ]);
            $validatedData['user_id'] = $user->id;
            Doctor::create($validatedData);
        }

        $this->emit('refreshLivewireDatatable');

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.backend.modals.doctor-modal');
    }
}
