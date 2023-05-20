<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'floor',
        'count',
        'charges',
        'prefix',
    ];

    public function beds()
    {
        return $this->hasMany(BedList::class, 'bed_id');
    }
}
