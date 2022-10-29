<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_id',
        'address',
        'landmark',
        'manager_name',
        'manager_contact_no',
        'manager_email',
        'branch_number'
    ];

    public function areas()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }
}
