<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	protected $fillable = ['business_id','service_category_id','name','description','slug'];
	
	public function business(){
		return $this->belongsTo('App\Business');
	}
	public function category(){
		return $this->belongsTo('App\ServiceCategory');
	}
	public function photos(){
		return $this->hasMany('App\ServiceGallery');
	}
	public function tags(){
		return $this->belongsToMany('App\Servicetag');
	}
}
