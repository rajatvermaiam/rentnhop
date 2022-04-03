<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'cart_data',
        'price_breakup',
        'from',
        'to',
        'mobile',
        'email',
        'name',
        'payment_status',
        'booking_status',
        'user_id',
        'role',
        'paid_rent',
        'remaining_rent',
        'security_rent',
        'razorpay_response',
    ];
}
