<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
	protected $fillable = ['name','description','slug'];
	
	public function services(){
		return $this->hasMany('App\Service');
    }
}
