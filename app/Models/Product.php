<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'image1',
        'image2',
        'image3',
        'image4',
        'car_name',
        'brand_id',
        'price',
        'description',
        'engine_type',
        'fuel_type',
        'transmission',
        'seating_capacity'
    ];
}
