<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicetag extends Model
{
    protected $fillable = ['name','description','slug'];
    
    public function service(){
        return $this->belongsToMany('App\Service');
    }
}
