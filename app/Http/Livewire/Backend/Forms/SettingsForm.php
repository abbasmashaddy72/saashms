<?php

namespace App\Http\Livewire\Backend\Forms;

use Livewire\Component;
use Livewire\WithFileUploads;

class SettingsForm extends Component
{
    use WithFileUploads;

    // Static Key
    public $name, $email, $contact_no, $logo, $about, $address, $gst, $favicon, $fb, $twitter, $instagram, $youtube, $gmb, $linkedin;

    // Custom Values
    public $isLogoUploaded = false;
    public $isFaviconUploaded = false;

    public function mount()
    {
        $this->name = get_static_option('name');
        $this->email = get_static_option('email');
        $this->contact_no = get_static_option('contact_no');
        $this->logo = get_static_option('logo');
        $this->about = get_static_option('about');
        $this->address = get_static_option('address');
        $this->gst = get_static_option('gst');
        $this->favicon = get_static_option('favicon');
        $this->fb = get_static_option('fb');
        $this->twitter = get_static_option('twitter');
        $this->instagram = get_static_option('instagram');
        $this->youtube = get_static_option('youtube');
        $this->gmb = get_static_option('gmb');
        $this->linkedin = get_static_option('linkedin');
    }

    protected $rules = [
        'name' => '',
        'email' => '',
        'contact_no' => '',
        'logo' => '',
        'about' => '',
        'address' => '',
        'gst' => '',
        'favicon' => '',
        'fb' => '',
        'twitter' => '',
        'instagram' => '',
        'youtube' => '',
        'gmb' => '',
        'linkedin' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

        if (!empty($this->logo)) {
            $this->isLogoUploaded = true;
        }

        if (!empty($this->favicon)) {
            $this->isFaviconUploaded = true;
        }
    }

    public function update()
    {
        $validatedData = $this->validate();

        foreach ($validatedData as $key => $value) {
            if ($key == 'favicon') {
                $favicon = $value->store($key, 'public');
                set_static_option($key, $favicon);
            } elseif ($key == 'logo') {
                $logo = $value->store($key, 'public');
                set_static_option($key, $logo);
            } else {
                unset($validatedData['favicon']);
                unset($validatedData['logo']);
                set_static_option($key, $value);
            }
        }

        return $this->redirectRoute('settings');
    }

    public function render()
    {
        return view('livewire.backend.forms.settings-form');
    }
}
