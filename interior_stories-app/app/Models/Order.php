<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    
    protected $fillable = [
        'id',
        'furniture_id',
        'user_id',
        'status',
        'created_at',
        'updated_at',


    ];

    public function orderItems() : HasMany 
    {
        return $this->hasMany(Order::class);
    }

    public function toCustomer(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
     
}
