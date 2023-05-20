<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'start_time',
        'end_time',
        'branch_id'
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
