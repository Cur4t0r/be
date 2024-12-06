<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TripSeat extends Model
{
    //
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'trip_id',
        'name',
        'row',
        'column',
        'class_type',
        'is_available'
    ];
}
