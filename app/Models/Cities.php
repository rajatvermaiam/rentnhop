<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'is_top',
        'parent_id',
        'user_id',
        'map_url'
    ];



    public function locations()
    {
        return $this->hasOne(Cities::class,'id','parent_id');
    }

    public function childrens()
    {
        return $this->hasMany(Cities::class,'parent_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
