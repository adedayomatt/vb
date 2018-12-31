<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessCategory extends Model
{
    protected $fillable = ['name','description','slug'];
	
	public function businesses(){
		return $this->hasMany('App\Business');
	}
}
