<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TripClass extends Model
{
    //
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'trip_id',
        'class_type',
        'price',
        'total_seats'
    ];
}
