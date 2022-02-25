<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'post_title',
        'post_slug',
        'post_images',
        'description',
        'status',
        'meta_robots',
        'meta_title',
        'meta_keyword',
        'meta_description'
    ];
}
