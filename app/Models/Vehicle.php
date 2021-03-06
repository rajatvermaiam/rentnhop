<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'model',
        'images',
        'description',
        'terms_conditions',
        'user_id',
        'meta_robots',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'category',
        'top_speed',
        'fuel_capacity',
        'type',
        'inclusions',
        'gears',
        'engine_cc',
        'status'
    ];



    public function prices()
    {
        return $this->belongsToMany(Price::class,'price_vehicles')->where('status', 'Active');
    }
}
