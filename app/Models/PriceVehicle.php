<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceVehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_id',
        'price_id',
        'vehicle_id',
    ];

}
