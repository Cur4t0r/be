<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TripSegment extends Model
{
    //
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'sequence',
        'trip_id',
        'terminal_id',
        'time'
    ];
}
