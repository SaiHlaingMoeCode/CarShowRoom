<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'model',
        'price',
        'description',
        'fuel_type',
        'engine_type',
        'transmission',
        'seating_capacity',
        'image1',
        'image2',
        'image3',
        'image4',
    ];
}
