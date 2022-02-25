<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category_name',
        'category_slug',
        'category_img',
        'description',
        'status',
        'meta_robots',
        'meta_title',
        'meta_keyword',
        'meta_description'
    ];
}
