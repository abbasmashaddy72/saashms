<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'department_id',
        'reg_no',
        'specialist',
        'opd_reg_fee',
        'ipd_reg_fee',
        'opd_consultation_fee',
        'ipd_consultation_fee',
        'fb',
        'twitter',
        'instagram',
        'gmb',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
