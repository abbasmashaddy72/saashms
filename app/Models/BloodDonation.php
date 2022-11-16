<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodDonation extends Model
{
    use HasFactory;

    protected $fillable = [
        'donated_patient_id',
        'count',
        'collected_on'
    ];

    public function donated_patient()
    {
        return $this->belongsTo(User::class, 'donated_patient_id');
    }
}
