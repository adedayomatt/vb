<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Businesstag extends Model
{
    protected $fillable = ['name','description','slug'];
    
    public function bussinesses(){
        return $this->belongsToMany('App\Business');
    }
}
