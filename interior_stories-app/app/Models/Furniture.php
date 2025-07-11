<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    use HasFactory;
    
    protected $table = 'furnitures'; // Forced to have furniture"s" and not furniture

    protected $fillable = [
        'name',
        'price',
        'category',
        'status',
        'image',
        'alt',
        'description',
        'measurements',
        'color',
        'material'
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
        ];
    }
}