<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'id',
        'furniture_id',
        'user_id',
        'status',
        'created_at',
        'updated_at',


    ];

     
}
