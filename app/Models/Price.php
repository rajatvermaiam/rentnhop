<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'city_id',
        'city_name',
        'locality_id',
        'locality_name',
        'vehicle_id',
        'status',
        'user_id',
        'weekday_price',
        'weekend_price',
        'security_price',
        'minimum_price',
        'monthly_price',
        'is_monthly',
        'quantity',
    ];

    public function city()
    {
        return $this->hasOne(Cities::class, 'id', 'city_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
