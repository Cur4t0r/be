<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionPassanger extends Model
{
    //
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'transaction_id',
        'trip_seat_id',
        'name',
        'date_of_birth',
        'nationality',
    ];
}
