<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producte extends Model
{
    protected $fillable=['price','name','type','image','category_id'];

    function category(){
        return $this->belongsTo(category::class,'category_id');
    }

}
