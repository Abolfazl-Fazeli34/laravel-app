<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'post';

//    protected $fillable = ['title', 'description', 'status'];
    protected $guarded = [];


//    public function scopeStatus($query, $status){
//        $query->where($query, $status);
//    }

//    public static function booted()
//    {
//        static::addGlobalScope('status', function ($query) {
//            $query->where('status', 1);
//        });
//    }
//    public function title(){
//        return Attribute::make(
//           set: fn($value) => strtoupper($value),
//           get: fn($value) => strtoupper($value)
//        );
//    }

//    public function setTitleAttribute($value){
//        return strtoupper($value);
//    }
//    public function getTitleAttribute($value){
//        $this->attributes['title'] = strtoupper($value);
//    }

}
