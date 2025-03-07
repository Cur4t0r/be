<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trip extends Model
{
    //
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'trip_number',
        'bus_id',
    ];
}
