<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodIssue extends Model
{
    use HasFactory;

    protected $fillable = [
        'issued_patient_id',
        'doctor_id',
        'blood_donation_id',
        'count',
        'amount',
        'description',
        'issue_date',
    ];

    public function issued_patient()
    {
        return $this->belongsTo(User::class, 'issued_patient_id');
    }

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    public function blood_donation()
    {
        return $this->belongsTo(BloodDonation::class, 'blood_donation_id');
    }
}
