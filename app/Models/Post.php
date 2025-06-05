<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'post';

//    protected $fillable = ['title', 'descriptions'];
    protected $guarded = [];


    public function scopeStatus($query, $status){
        $query->where($query, $status);
    }

//    public static function booted()
//    {
//        static::addGlobalScope('status', function ($query) {
//            $query->where('status', 1);
//        });
//    }
}
