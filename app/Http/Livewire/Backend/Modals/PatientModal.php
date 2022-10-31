<?php

namespace App\Http\Livewire\Backend\Modals;

use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use LivewireUI\Modal\ModalComponent;

class PatientModal extends ModalComponent
{
    // Set Values
    public $user_id, $branches, $genders, $blood_groups, $areas;
    // Model Values
    public $name, $email, $branch_id, $status, $gender, $dob, $qualification, $designation, $blood_group, $contact_no, $address, $about, $area_id;

    public function mount()
    {
        if (!empty($this->user_id)) {
            $data = User::where('id', $this->user_id)->with('area')->first();
            $this->name = $data->name;
            $this->email = $data->email;
            $this->branch_id = $data->branch_id;
            $this->status = $data->status;
            $this->gender = $data->gender;
            $this->dob = $data->dob;
            $this->qualification = $data->qualification;
            $this->designation = $data->designation;
            $this->blood_group = $data->blood_group;
            $this->contact_no = $data->contact_no;
            $this->address = $data->address;
            $this->about = $data->about;
            $this->area_id = $data->area_id;
        }

        $this->branches = getKeyValuesWithMap('Branch', 'landmark', 'id');
        $this->genders = getEnum('users', 'gender');
        $this->blood_groups = getEnum('users', 'blood_group');
        $this->areas = getKeyValuesWithMap('Area', 'name', 'id');
    }

    protected $rules = [
        'name' => '',
        'email' => '',
        'branch_id' => '',
        'status' => '',
        'gender' => '',
        'dob' => '',
        'qualification' => '',
        'designation' => '',
        'blood_group' => '',
        'contact_no' => '',
        'address' => '',
        'about' => '',
        'area_id' => '',
    ];

    public static function modalMaxWidth(): string
    {
        return '7xl';
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function add()
    {
        $validatedData = $this->validate();

        if (!empty($this->user_id)) {
            $validatedData['password'] = Hash::make(substr($validatedData['name'], 0, 3) . '@123');
            User::where('id', $this->user_id)->update($validatedData);
        } else {
            $validatedData['password'] = Hash::make(substr($validatedData['name'], 0, 3) . '@123');
            $user = User::create($validatedData);
            $role = Role::where('title', 'Patient')->first();
            RoleUser::create([
                'user_id' => $user->id,
                'role_id' => $role->id
            ]);
        }

        $this->emit('refreshLivewireDatatable');

        $this->closeModal();
    }


    public function render()
    {
        return view('livewire.backend.modals.patient-modal');
    }
}
