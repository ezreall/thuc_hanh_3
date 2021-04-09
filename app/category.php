<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable=['type_category','name','describe'];

    function productes(){
        return $this->hasMany(producte::class,'category_id');
    }
}
