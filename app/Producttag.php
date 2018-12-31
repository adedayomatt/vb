<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producttag extends Model
{
    protected $fillable = ['name','description','slug'];
    
    public function product(){
        return $this->belongsToMany('App\Product');
    }
}
