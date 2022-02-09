<?php

namespace App\Models\adminv\admin;

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
    ];
}