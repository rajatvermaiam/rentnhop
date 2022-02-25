<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'coupon_code',
        'coupon_expire_date',
        'coupon_type',
        'status',
        'coupon_times_used',
        'amount',
        'minimum_booking_amount',
        'maximum_booking_amount',
        'meta_description'
    ];
}
