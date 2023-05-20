<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BedList extends Model
{
    use HasFactory;

    protected $fillable = [
        'bed_id',
        'bed_no'
    ];
}
