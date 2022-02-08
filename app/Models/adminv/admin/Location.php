<?php

namespace App\Models\adminv\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'map_url',
        'city_id',
        'user_id'
    ];

    public function city()
    {
        return $this->hasOne(Cities::class, 'id', 'city_id');
    }
}
