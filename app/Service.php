<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	protected $fillable = ['business_id','service_category_id','name','description','slug','dp'];
	
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

//check if the service belongs to a particular business
public function ownedBy($business_id){
	return $this->business_id === $business_id ? true : false;
}

public function dp(){
		$image = array();
		$image['src'] = $this->dp === null ? asset('storage/images/service/dp/default.png') : asset('storage/images/service/dp/'.$this->dp);
		$image['alt'] = $this->name.' by '.$this->business->name.' on '.config('app.name');
		return $image;
	}
	
	public function description($mode = 'snippet'){
		if($mode === 'snippet'){
			return $this->description == null ? '<small class="text-danger" ><i class="fa fa-exclamation-triangle"></i> No description </small>': str_limit(strip_tags($this->description),50);
		}
		return $this->description == null ? '<small class="text-danger" ><i class="fa fa-exclamation-triangle"></i> No description </small>': $this->description;
	}

	
}
