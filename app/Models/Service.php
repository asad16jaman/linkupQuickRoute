<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //

    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class)->select(['id','nav_name']);
    }

    public function categoryDetail(){
        return $this->belongsTo(Category::class);
    }

    public function image(){
        return $this->hasOne(ServiceImage::class)->latest();
    }
    
}
