<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    //
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'trip_id',
        'trip_classes_id',
        'name',
        'name',
        'email',
        'phone',
        'number_of_passangers',
        'promo_code_id',
        'pasyment_status',
        'subtota;',
        'grandtotal',
    ];
}
