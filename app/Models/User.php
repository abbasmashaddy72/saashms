<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Lab404\Impersonate\Models\Impersonate;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Impersonate;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'branch_id',
        'status',
        'gender',
        'dob',
        'qualification',
        'designation',
        'blood_group',
        'contact_no',
        'address',
        'about',
        'area_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Gets First & Last Word Initials of Auth User Names
    public function getInitialsAttribute()
    {
        $name = $this->name;
        $name_array = explode(' ', trim($name));

        $firstWord = $name_array[0];
        $lastWord = $name_array[count($name_array) - 1];

        return $firstWord[0] . $lastWord[0];
    }

    public function role()
    {
        return $this->belongsToMany(Role::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function doctor()
    {
        return $this->hasOne(Doctor::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function blood_donations()
    {
        return $this->hasMany(BloodDonation::class, 'donated_patient_id');
    }
}
