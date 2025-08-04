<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $guarded = [];

    public function service(){
        return $this->hasOne(Service::class);
    }

    public function hasService(){
        return $this->hasOne(Service::class)->exists();
    }




}
