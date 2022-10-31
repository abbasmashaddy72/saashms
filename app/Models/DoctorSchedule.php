<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'per_patient_time',
        'day',
        'from',
        'till',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
